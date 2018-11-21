<?php

namespace App\Http\Controllers;

use \App\Product;
use \App\User;
use App\Product_photo;
use App\Category;
use App\Comment;
use App\Price_update;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class AdminProductsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $products = Product::where('is_delete', '1')->paginate(3);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $categories = Category::pluck('name', 'id')->all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required |min:3',
            'description' => 'required|max:250',
            'unit_price' => 'required',
            'promotion_price' => 'required',
            'category_id' => 'required'
        ]);
        $input = $request->all();
        $user = Auth::user();

        if ($user) {
            $input['user_id'] = $user->id;
            $products = new Product();
            $status = $products->create($input) ? "success" : "fail";
            $product_id = DB::getPdo()->lastInsertId();
            $price = new Price_update();
            $price->create([
                'product_id' => $product_id,
                'unit_price' => $input['unit_price'],
                'promotion_price' => $input['promotion_price'],
            ]);
            if ($file = $request->file('photo_id')) {
                $year = date('Y');
                $month = date('m');
                $day = date('d');
                $sub_folder = $year . '/' . $month . '/' . $day . '/';
                $upload_url = 'images/' . $sub_folder;

                if (!File::exists(public_path() . '/' . $upload_url)) {
                    File::makeDirectory(public_path() . '/' . $upload_url, 0777, true);
                }

                $name = time() . $file->getClientOriginalName();


                $file->move($upload_url, $name);

                $product_photo = Product_photo::create(['url' => $upload_url . $name, 'product_id' => $product_id]);
                //$status = Product::create($input) ? "success" : "fail";
//                $status = "success";
                $message = $status == "success" ? "Success! Your created successful" : "Failed! Your created fail";
                $response = array('status' => $status, 'message' => $message);
                return redirect('/admin/products')->with('response', $response);
            }
        } else {
            return view("admin.errors.submit-error", ["data" => "Please login as administrator!"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
    }

    public function edit($id) {
        $product = Product::findOrFail($id);
        $photos = Product_photo::where('product_id', $id)->get();
        $categories = Category::pluck('name', 'id')->all();
        return view('admin.products.edit', compact('product', 'categories', 'photos'));
    }

    public function update(Request $request, $id) {
        $products = Product::findOrFail($id);
        $input = $request->all();
        $product_id = $id;
        $price = Price_update::findOrFail($id);
        $price->update([
            'product_id' => $product_id,
            'unit_price' => $input['unit_price'],
            'promotion_price' => $input['promotion_price'],
            $price->save()
        ]);
        $this->validate($request, [
            'name' => 'required |min:3|max:12',
            'description' => 'required|max:250',
            'unit_price' => 'required',
            'promotion_price' => 'required',
            'category_id' => 'required'
        ]);
        if ($file = $request->file('photo_id')) {
            $year = date('Y');
            $month = date('m');
            $day = date('d');
            $sub_folder = $year . '/' . $month . '/' . $day . '/';
            $upload_url = 'images/' . $sub_folder;

            if (!File::exists(public_path() . '/' . $upload_url)) {
                File::makeDirectory(public_path() . '/' . $upload_url, 0777, true);
            }

            $name = time() . $file->getClientOriginalName();
            $file->move($upload_url, $name);

            $Product_photo = Product_photo::create(['url' => $upload_url . $name, 'product_id' => $product_id]);
        }


        $status = $products->update($input) ? "success" : "fail";

        $message = $status == "success" ? "Success! Your edit  successful" : "Failed! Your edit fail";
        $response = array('status' => $status, 'message' => $message);
        return redirect('/admin/products')->with('response', $response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $product = product::findOrFail($id);
        $photos = Product_photo::findOrFail($id);
        $price = Price_update::findOrFail($id);
        $product['is_delete'] = 0;
        $photos->delete();
        $price->delete();

        \Illuminate\Support\Facades\Session::flash('deleted_user', 'The user has been deleted');

        $status = $product->save() ? "success" : "fail";

        $message = $status == "success" ? "Success! Your delete  successful" : "Failed! Your delete fail";
        $response = array('status' => $status, 'message' => $message);
        return redirect('/admin/products')->with('response', $response);
    }

}
