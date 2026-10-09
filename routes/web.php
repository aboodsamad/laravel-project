<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'hello World!',
        'person' => request('person' , 'abdo'),
    ]);
});


Route::get('/about', function () {
    return view('about');
});


Route::get("/contact", function(){
    return view('contact');
});