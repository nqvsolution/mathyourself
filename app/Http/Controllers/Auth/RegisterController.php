<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function showRegistrationForm(){
        return view('user.login');
    }

    public function saveUser(Request $request){
        $validator = $request->validate([
            'first_name' => 'required|string|max:20',
            'last_name'  => 'required|string|max:20',
            'email'      => 'required|string|email|max:255|unique:users',
            'password'   => 'required|string|min:6|max:10',
        ]);


        $id = DB::table('users')->insertGetId(
            ['first_name' => $request->input('first_name'),
             'last_name'  => $request->input('last_name'),
             'email'      => $request->input('email'),
             'password'   => Hash::make($request->input('password')),
            ]);
        if(!empty($id)){
           return redirect()->route('/'); 
        }

    }

    
}
