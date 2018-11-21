<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Category;
Use App\Product;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Bill;
use App\Bill_detail;
use App\User;
use App\Cart;
use Illuminate\Support\Facades\Mail;
use Session;

class ShoppingCartController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);

        return response()->json([
                    'totalQty' => Session::has('cart') ? Session::get('cart')->totalQty : '',
                    'qty' => Session::get('cart')->items[$id]['qty'],
                    'price' => Session::get('cart')->items[$id]['price'] . 'USD',
                    'totalPrice' => Session::get('cart')->totalPrice . 'USD'
                        ], 200);
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('checkCart', ['products' => null]);
        }
        $categories = Category::all();
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        $pro_size = array();
        foreach ($cart->items as $item) {
            $pro_size = Product::where('id', $item['item']['id'])->first();
        }
        
        return view('checkCart', ['products' => $cart->items,
            'totalQty' => $cart->totalQty, 'totalPrice' => $cart->totalPrice, 'pro_size' => $pro_size]);
    }

    public function getCheckout() {
        if (!Session::has('cart')) {
            return view('checkCart', ['products' => null]);
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('order', ['products' => $cart->items, 'totalQty' => $cart->totalQty, 'totalPrice' => $cart->totalPrice]);
    }

    public function postCheckout(Request $request) {

        if (!Session::has('cart')) {
            return redirect()->route('order');
        }

        $validator = Validator::make($request->all(), [
                    'email' => 'bail|required|string|email|max:255',
                    'name' => 'bail|required',
                    'city' => 'bail|required',
                    'district' => 'bail|required',
                    'town' => 'bail|required',
                    'home' => 'bail|required',
                    'phone' => 'bail|required|min:10|max:11',
        ]);

        if ($validator->passes()) {
            $input = $request->all();
            $input['address'] = $input['home'] . ', ' . $input['town'] . ', ' . $input['district'] . ', ' . $input['city'];
            $customer = User::where('email', $input['email'])->first();

            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $result = DB::transaction(function () use ($input, $cart) {
                        try {
                            $user = User::where('email', $input['email'])->get();

                            if ($user == null) {

                                $customer = new User();
                                $customer->create([
                                    'name' => $input['name'],
                                    'email' => $input['email'],
                                    'password' => bcrypt('eliteShoppe'),
                                ]);

                                $user = DB::getPdo()->lastInsertId();
                                $bill = new Bill();
                                $bill->create([
                                    'total' => $cart->totalPrice,
                                    'payment' => $input['ship'],
                                    'quanlity' => $cart->totalQty,
                                    'address' => $input['address'],
                                    'phone' => $input['phone'],
                                    'user_id' => $user,
                                ]);

                                $bill_id = DB::getPdo()->lastInsertId();
                                foreach ($cart->items as $cart_addBD) {
                                    $bill_detail = new Bill_detail();
                                    $bill_detail->create([
                                        'quantity' => $cart_addBD['qty'],
                                        'size' => 'M',
                                        'product_id' => $cart_addBD['item']['id'],
                                        'bill_id' => $bill_id
                                    ]);
                                }
                            } else {
                                $user = User::where('email', $input['email'])->first();

                                $bill = new Bill();
                                $bill->create([
                                    'total' => $cart->totalPrice,
                                    'payment' => $input['ship'],
                                    'quanlity' => $cart->totalQty,
                                    'address' => $input['address'],
                                    'phone' => $input['phone'],
                                    'user_id' => $user->id,
                                ]);

                                $bill_id = DB::getPdo()->lastInsertId();

                                foreach ($cart->items as $cart_addBD) {
                                    $bill_detail = new Bill_detail();
                                    $bill_detail->create([
                                        'quantity' => $cart_addBD['qty'],
                                        'size' => 'M',
                                        'product_id' => $cart_addBD['item']['id'],
                                        'bill_id' => $bill_id
                                    ]);
                                }
                            }
                        } catch (\Exception $e) {
                            DB::rollBack();
                            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
                        }

                        $user = User::where('email', $input['email'])->first();
                        $bill_id = Bill::where('user_id', $user->id)->max('id');
                        $bill = Bill::where('id', $bill_id)->first();
                        Mail::send('includes.OrderConfirmationEmail', ['user' => $user,
                            'products' => $cart->items, 'totalQty' => $cart->totalQty,
                            'totalPrice' => $cart->totalPrice, 'bill' => $bill], function ($message) use ($user) {
                            $message->from('laravel.clothes@gmail.com', 'Elite Shoppy');

                            $message->to($user->email, $user->name)->subject('[Elite Shoppy]Your order infomation!');
                        });

                        Session::forget('cart');
                        DB::commit();
                    });
        } else {
            return response()->json(['error' => $validator->errors()]);
        }

        return redirect()->route('history', $customer->id)->with('success', 'Successfully purchased products!');
    }

    public function deductByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->deductByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return response()->json([
                    'totalQty' => Session::has('cart') ? Session::get('cart')->totalQty : '',
                    'qty' => Session::get('cart')->items[$id]['qty'],
                    'price' => Session::get('cart')->items[$id]['price'] . 'USD',
                    'totalPrice' => Session::get('cart')->totalPrice . 'USD'
                        ], 200);
    }

    public function removeItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;  
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return response()->json([
                    'products' => $cart->items,
                    'totalQty' => $cart->totalQty,
                    'totalPrice' => $cart->totalPrice
                        ], 200);
    }

}
