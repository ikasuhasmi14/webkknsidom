<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadFileController;

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

//route webkknsidomulyo

Route::get('/home', 'WebController@home');
Route::get('/ktp', 'WebController@ktp');
Route::get('/syarat', 'WebController@syarat');
Route::get('/syaratkk', 'WebController@syaratkk');
Route::get('/contact', 'WebController@contact');

Route::get('/file-download', [DownloadFileController::class, 'Blankosuratkematian'])->name('file.download.index');

Route::get('/file-download2', [DownloadFileController::class, 'BlankosuratpengantarRTRW'])->name('file.download.index');


Route::get('/file-download3', [DownloadFileController::class, 'BlankoformulirpermohonanKKbaruWNI'])->name('file.download.index');


