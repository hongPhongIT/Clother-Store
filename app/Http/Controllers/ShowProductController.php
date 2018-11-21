<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Category;
Use App\Product;
use Illuminate\Support\Facades\DB;
use App\Product_photo;
use App\Comment;

class ShowProductController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        $comments = Comment::where('product_id', $id)->get();
        $products = Product::where('category_id', $product->category_id)->where('id', '<>', $id)->paginate(4);
        $view = view('includes.showProduct', compact('products'));
        return view('detail', compact('product', 'comments', 'view'));
    }

    public function getProByCategory($id) {
        $categories = Category::all();
        $products = Product::where('category_id', $id)->paginate(8);
        return view('men', compact('products', 'categories'));
     }

}
