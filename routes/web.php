<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('pages', App\Http\Controllers\PageController::class);
Route::resource('sections', App\Http\Controllers\SectionController::class);
