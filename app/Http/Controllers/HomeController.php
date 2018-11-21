<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;

class HomeController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $categories = Category::get();
        $new_product = Product::where('is_delete', '=', '1')->paginate(8);
        $promotion_price = Product::join('price_updates', 'price_updates.product_id', '=', 'products.id')
            ->where('price_updates.promotion_price', '>', 0)->paginate(8);
        $bestSellProducts = Product::join('bill_details', 'bill_details.product_id', '=', 'products.id')
            ->join('price_updates', 'price_updates.product_id', '=', 'products.id')
            ->where('bill_details.quantity', '>', 5)->select('*')->paginate(8);
       
        return view('home', ['categories'=>$categories,'new_product'=>$new_product,'promotion_price'=>$promotion_price,'bestSellProducts'=>$bestSellProducts ]);
    }

}
