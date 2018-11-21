<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Post;
use App\Category;
use App\Product;

date_default_timezone_set("Asia/Ho_Chi_Minh");

class CommentController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id) {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $input = $request->all();
        $user = Auth::user();
        if ($user) {
            $comment = new Comment();
            $input['user_id'] = $user->id;
            $input['comment'] = $request->comment;
            $input['product_id'] = $request->product_id;
            $input['parentid'] = $request->parentid;
            $comment->create($input);
        }
        $product = Product::findOrFail($input['product_id']);
        $comments = Comment::where('parentid', $input['parentid'])->get();
        return view('layouts.commentForm', compact('comments','product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $product = Product::findOrFail($_GET['product_id']);
        $comments = Comment::where('parentid', $id)->get();
        return view('layouts.commentForm', compact('comments','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
