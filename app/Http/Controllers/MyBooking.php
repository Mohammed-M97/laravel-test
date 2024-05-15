<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyBooking extends Controller
{
    public function MyBooking(Request $request)
    {
        return $request->all();
        /* return 'my booking'; */
    }

    public function login()
    {
        return "<h1>Login Page</h1>";
    }

    public function sayHello(Request $request, $name)
    {
        return "You are auth";
        /* if ($name == 'ahmad') {
            $isAuth = true;
        } else {
            $isAuth = false;
        }

        if ($isAuth) {
            return response()->json(['data' => ['name' => $name]]);
        } else {
            return response()->json(['error' => 'Not Authenticated'], 401);
        } */
    }
}
