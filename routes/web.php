<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'hello World!',
    ]);
});


Route::get('/about', function () {
    return view('about');
});


Route::get("/contact", function(){
    return view('contact');
});