<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        //dd(session()->all());
        return view('login.index');
    }

    public function store(Request $request){

        // authenticate user

         session(['alert' => __('Добро пожаловать!')]);

        // if(true){
        //     return redirect()->back()->withInput();
        // }

        return redirect('user');
        
    }
}
