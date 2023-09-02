<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Metronic;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/metronic', [Metronic::class, 'index']);