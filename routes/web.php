<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyBooking;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $myName = 'Mohammed Khaled';
    return view('test')
        ->with('name', $myName);
});

Route::get('/myboooking',  MyBooking::class . '@MyBooking');

Route::get('/sayHello/{name}', MyBooking::class . '@sayHello')->middleware("App\Http\Middleware\IsMknUser");

Route::get('/login', MyBooking::class . '@login');