<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $data = [
        'title' => 'Hello World ✌',
        'sub_title' => 'brought by Laravel 😁',
        'message' => 'My first application with Laravel 🙌',
    ];


    return view('homepage', $data);
});

Route::get('/aboutus', function () {

    $data = [
        'title' => 'Hello About Us 📚',
        'sub_title' => 'brought by Laravel 😁',
    ];


    return view('aboutus', $data);
});
