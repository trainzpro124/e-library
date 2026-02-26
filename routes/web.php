<?php

use App\Http\Controllers\HallController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('homepage', ['title' => 'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/hall', [HallController::class, 'index']);
Route::get('/hall/book/{book:slug}', [HallController::class, 'singleBook']);


