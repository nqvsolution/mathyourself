<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLogin(){
        return view('user.login');

    }
    public function login(Request $request){
        $credentials = $request->only('email','password');

        $email = $request->input('email');
        if(DB::table('users')->where('email',$email)){
            if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('/');
            }else{
                return redirect()->back()->with('status', 'Không Thể Đăng Nhập,Vui Lòng Thử Lại Sau');
            }
        }else{
            return redirect()->back()->with('status', 'Email Không Tồn Tại');
        }

    }
   
}
