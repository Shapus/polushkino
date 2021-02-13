<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/upload', [App\Http\Controllers\UploadController::class, 'fileUpload'])->name('file.upload');
Route::post('/upload', [App\Http\Controllers\UploadController::class, 'fileUploadPost'])->name('file.upload.post');
Route::get('/delete', [App\Http\Controllers\UploadController::class, 'delete'])->name('file.delete');

