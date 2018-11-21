<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function index(){
    	$products = Product::orderBy('created_at', 'desc') -> paginate(4);
    	$view = view('includes.showProduct', compact('products'));
        return view('searchresult')->with('products', $products,'$view',$view);
    }

//    public function search(Request $request){
//    	$search = $request->input('search');
//	$products = Product::where('name', 'like', "$search%")
//	       ->orWhere('description', 'like', "$search%")
//	       ->get();
//
//	$view = view('includes.showProduct', compact('products', 'search'));
//        return view('fullTextSearch', compact('products', 'search',  'view'));
//    }

    public function search() {
        DB::enableQueryLog();
        $products = Product::search($_GET['keyword'])->paginate(16);
        
        $products -> setPath('/projectLaravel/public/search?keyword=' . $_GET['keyword']);
        $keyword = $_GET['keyword'];
        $laQuery = DB::getQueryLog();

        $is_search = 1;
        $categories = Category::all();
        
        $view = view('includes.showProduct', compact('products', 'is_search', 'keyword', 'categories'));
        return view('fullTextSearch', compact('products', 'is_search', 'keyword', 'categories', 'view'));
    }
    
   

}
