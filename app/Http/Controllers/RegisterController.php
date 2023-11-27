<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){
        //$data = $request->all(); метод  all позволяе получить все данных из формы/запроса

        //$data = $request->only('email','name'); метод only позволяет получить некоторые данные на выбор

        //$data = $request->except('email','name');метод exept позволяе исключить данные из запроса

        //$name = $request->input('name'); метод input позволяет получать параметры из запроса, если параметр не заполнен выведет null

        //$email = $request->email; можно обращаться напрямую к нужному параметру

        //$remember = $request->boolean('remember');метод boolen позволыет конвентировать в булевое значение

        //$avatar = $request->file('avatar'); метод file позволяет получать файл из запроса

        // $request->has('name'); метод has проверяет наличие параметра в запросе

        //$request->filled('name'); метод filled проверпяет на заполненность нужный параметр

        //$request->missing('name'); метод missing проверяет на незаполненность нужный параметр

        //$name = $request->input('name');
        //$email = $request->input('email');
        //$password = $request->input('password');
        //$agreement = $request->boolean('agreement');

        //dd($name, $email, $password, $agreement);

        if(true){
            return redirect()->back()->withInput();
        }

        return redirect()->route('user');
        
    }
}
