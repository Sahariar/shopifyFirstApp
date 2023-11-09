<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopifyController extends Controller
{
    //
    function sayHi($name){
            return response("Hi {$name}", 200);
    }

    function managePostRequest(Request $request){
        $name  = $request->input('name');
        $email  = $request->input('email');
        return response("POST REQUEST OUTPUT - {$name} - {$email}", 200);
    }
}
