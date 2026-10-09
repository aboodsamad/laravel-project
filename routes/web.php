<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'hello World!',
        'person' => request('person' , 'abdo'),
        'tasks' => [
            'first task',
            'second task',
            'third task',
        ]
    ]);
});


Route::get('/about', function () {
    return view('about');
});


Route::get("/contact", function(){
    return view('contact');
});