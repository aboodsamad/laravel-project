<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = session()->get('idea', []);
    return view('ideas', ['ideas' => $ideas]);
});


Route::post('/ideas', function () {
    $idea = request('ideas');
    session()->push('idea', $idea);
    return redirect('/');
});


Route::get('/delete', function(){
    session()->forget('idea');
    return redirect('/');
});
