<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Bill;

class AdminBillsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $bills = DB::table('bills')
                        ->join('bill_details', 'bills.id', '=', 'bill_details.bill_id')
                        ->join('users', 'bills.user_id', '=', 'users.id')
                        ->select('bills.*', 'bill_details.*', 'users.name', 'users.email')
                        ->get();
        
        return view('admin.bill.index',compact('bills'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        $billInfo = DB::table('bills')
                        ->join('bill_details', 'bills.id', '=', 'bill_details.bill_id')
                        ->join('users', 'bills.user_id', '=', 'users.id')
                        ->leftjoin('products', 'bill_details.product_id', '=', 'products.id')
                        ->where('bill_details.id', '=', $id)
                        ->select('bills.*', 'users.name', 'users.email')
                        ->get()->first();
        
        $billDetails = DB::table('bills')
                        ->join('bill_details', 'bills.id', '=', 'bill_details.bill_id')
                        ->leftjoin('products', 'bill_details.product_id', '=', 'products.id')
                        ->where('bill_details.id', '=', $id)
                        ->select('bill_details.*', 'products.name as product_name')
                        ->get();
        
//        

//        $user = DB::table('bills')
//                ->join('users')
//                ->select('users.*', 'bills.id as bill_id', 'bills.total as bill_total', 'bills.status as status')
//                ->where('users.id', '=',  $bills->user_id)
//                ->first();

        return view('admin.bill.edit', compact('billInfo', 'billDetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $bill = Bill::findOrFail($id);
        $bill->status = $request->input('status');
        $bill->save();
        Session::flash('message', "Successfully updated");

        return redirect('/admin/bill');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
       
        Bill_detail::findOrFail($bill_id)->delete();
        Bill::findOrFail($id)->delete();
        $bill->delete();

//        Session::flash('message', "Successfully deleted");

        return redirect()->back()->with('message', "Successfully deleted");
    }

}
