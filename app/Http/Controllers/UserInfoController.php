<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class UserInfoController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */



    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function edit(Request $request) {

        $rules = [
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ];
        $messages = [];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                        'error' => true,
                        'message' => $validator->errors()
                            ], 200);
        } else {
            User::edit([
                        'name' => $request['name'],
                        'password' => bcrypt($request['password']),
            ]);
            return response()->json([
                        'error' => false,
                        'message' => 'Edit success !!!'
                            ], 200);
        }
    }

    
}