<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('/login.php', function () {
    return view('login');
});
Route::get('/mainPage.php', function () {
    return view('mainPage');
});
