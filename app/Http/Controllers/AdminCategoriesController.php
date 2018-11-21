<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use App\Category;

class AdminCategoriesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $categories = Category::where('is_delete', 0)->get();
        $categories = Category::paginate(3);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|min:2',
            'parentid' => 'required'
                ], [
            'name.required' => 'Name is required.',
            'name.min' => 'Name is very short.',
            'parentid.required' => 'Please choose Category!!'
        ]);
//               
        $input = $request->all();
        $input['is_delete'] = 0;
        Category::create($input);
        \Illuminate\Support\Facades\Session::flash('created_category', 'The category has been created');
        return redirect('/admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $category = Category::findOrFail($id);
        $category->update($request->all());
//        return redirect('/admin/categories'); 
        \Illuminate\Support\Facades\Session::flash('updated_category', 'The category has been updated');
        return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Category::where('parentid',$id)->delete();
        Category::findOrFail($id)->delete();
        \Illuminate\Support\Facades\Session::flash('deleted_category', 'The category has been deleted');
        return redirect('/admin/categories');
    }

}
