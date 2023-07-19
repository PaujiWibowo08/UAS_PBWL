<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Contracts\Service\Attribute\Required;

class SessionController extends Controller
{
    function index()
    {
        return view('index');
    }
    function login(Request $request)
    {
        Session::flash('email',$request->email);
        $request->validate([
            'email'=> 'required',
            'password' => 'required'
        ],[
            'email.required'=>'email wajib diisi',
            'password.required'=>'password wajib diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
           return redirect ('/dashboard'); 
        }else{
            return 'gagal';
        }
    }
}
