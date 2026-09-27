<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lapor', [LaporanController::class, 'form']);
Route::post('/lapor', [LaporanController::class, 'proses']);
