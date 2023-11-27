<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function __construct(){
        $this->middleware('throttle:10'); // тотл ограничевает кол- во запросов 10 в минуту
    }

    public function test(Request $request) {
      //return response('test', 200, []);

    }
}
