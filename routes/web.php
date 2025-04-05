<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('landing');
});
Route::get('/login.php', function () {
    return view('login');
});
Route::get('/mainPage.php', function () {
    return view('mainPage');
});
Route::get('/mainPage.php', [PageController::class, 'showMainPage']);