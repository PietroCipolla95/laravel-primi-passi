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

Route::get('/about', function () {

    $data = [
        'title' => 'Hello About 📚',
        'sub_title' => 'brought by Laravel 😁',
    ];


    return view('about', $data);
});

Route::get('/contact', function () {

    $data = [
        'title' => 'Hello Contact 📧',
        'sub_title' => 'brought by Laravel 😁',
    ];


    return view('contact', $data);
});
