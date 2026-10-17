<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $idea = session()->get('ideas');

    return view('ideas',[
        'ideas' => $idea,
    ]);
});

Route::post('/ideas', function () {
    $ideas = request('ideas');
    session()->push('ideas', $ideas);
    return redirect('/');
});

Route::get('/delete',function(){
    session()->forget('ideas');
    return redirect('/');
});
