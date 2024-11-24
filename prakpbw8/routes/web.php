<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn ()=> view('home'));
Route::get('/about', fn ()=> view('about'));
Route::get('/contact', fn ()=> view('contact'));
Route::get('/gallery', fn ()=> view('gallery'));

Route::get('users', function(){
    $users = [
        ['id' => 1,'name' => 'John Doe','email' => 'john@parsinta.com'],
        ['id' => 2,'name' => 'Jone Doe','email' => 'john@parsinta.com'],
    ];

    return view('users.index',compact('users'));
});
