<?php

use Illuminate\Support\Facades\Route;
use App\Models\Wish;
use App\Http\Controllers\WishController;

Route::get('/', function () {

    $wishes = Wish::latest()->get();

    return view('home', compact('wishes'));

});

Route::view('/calendar', 'calendar');

Route::view('/puzzle', 'puzzle');

Route::view('/gallery', 'gallery');

Route::view('/video', 'video');

Route::view('/closing', 'closing');

