<?php

use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [ResumeController::class, 'index']);
Route::get('/download', [ResumeController::class, 'download'])
           ->middleware('throttle:10,1')
           ->middleware('signed')
           ->name('resume.download');
