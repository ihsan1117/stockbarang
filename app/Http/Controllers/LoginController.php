<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function postLogin(Request $request){

        // dd(md5($request->password),request()->all());
        // $password = Hash::make($request->password);
        // dd(request()->all(),$password);

        if(Auth::attempt($request->only('username','password'))){
            $request->session()->regenerate();

            return redirect()->intended('/stock');
        }
        
    }

    public function logout(request $request){
        Auth::logout();

        return redirect('/');
    }
}
