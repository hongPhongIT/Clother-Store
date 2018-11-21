<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Bill;
use Validator;
use Session;

class AdminUsersController extends Controller {

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
        //
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
        //
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

    public function saveCustomer(Request $request) {
        $validator = Validator::make($request->all(), [
                    'email' => 'bail|required|string|email|max:255',
                    'name' => 'bail|required',
                    'city' => 'bail|required',
                    'district' => 'bail|required',
                    'town' => 'bail|required',
                    'homeNum' => 'bail|required',
                    'phone' => 'bail|required|min:10|max:11',
        ]);

        if ($validator->passes()) {
            $customer = User::where('email', $request['email'])->first();
            if ($customer == null) {
                $customer = User::create([
                            'email' => $request['email'],
                            'name' => $request['name'],
                            'password' => bcrypt('123123')
                ]);
                $input = $request->all();
                return response()->json(['email' => $input['email'],
                            'name' => $input['name'],
                            'city' => $input['city'],
                            'district' => $input['district'],
                            'town' => $input['town'],
                            'homeNum' => $input['homeNum'],
                            'phone' => $input['phone']
                                ], 200);
            } else {
                $input = $request->all();
                return response()->json(['email' => $input['email'],
                            'name' => $input['name'],
                            'city' => $input['city'],
                            'district' => $input['district'],
                            'town' => $input['town'],
                            'homeNum' => $input['homeNum'],
                            'phone' => $input['phone']
                                ], 200);
            }

        } else {
            return response()->json(['error' => $validator->errors()]);
        }
    }

    public function createCustomer() {
        
    }

    public function editCustomer(Request $request) {
        Session::put('customer', $request);
        return view('includes.form_customer', ['customer' => $request]);
    }

    public function checkCustomer($email) {
        $customer = User::where('email', $email)->first();
        $bills = Bill::where('user_id', $customer->id)->first();
        list($homeNum, $town, $district, $city ) = explode(", ", $bills->address);
        if ($customer->bills != null) {
            return response()->json(['name' => $customer->name, 'phone' => $bills->phone,
                        'homeNum' => $homeNum,
                        'city' => $city,
                        'district' => $district,
                        'town' => $town
                            ], 200);
        }
    }

}
