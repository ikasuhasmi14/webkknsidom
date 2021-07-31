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

Route::get('/', 'WebController@home');
Route::get('/home', 'WebController@home');
Route::get('/ktp', 'WebController@ktp');
Route::get('/listBlanko', 'WebController@listBlanko');

Route::get('/detail/{id}','WebController@detail');

Route::get('/tambahSyarat','WebController@tambahSyarat');
Route::POST('/simpanSyarat','WebController@simpanSyarat');

Route::get('/tambahGambar','WebController@tambahGambar');
Route::POST('/simpanGambar','WebController@simpanGambar');

Route::get('/tambahFile','WebController@tambahFile');
Route::POST('/simpanFile','WebController@simpanFile');


Route::get('/syarat', 'WebController@syarat');
Route::get('/syaratkk', 'WebController@syaratkk');
Route::get('/syarataktakematian', 'WebController@syarataktakematian');
Route::get('/syaratnikah', 'WebController@syaratnikah');
Route::get('/syaratPerubahanData', 'WebController@syaratPerubahanData');
Route::get('/syaratAhliWaris', 'WebController@syaratAhliWaris');
Route::get('/syaratUsaha', 'WebController@syaratUsaha');
Route::get('/syaratAktaKelahiran', 'WebController@syaratAktaKelahiran');
Route::get('/syaratTidakMampu', 'WebController@syaratTidakMampu');
Route::get('/syaratDomisiliKantor', 'WebController@syaratDomisiliKantor');
Route::get('/syaratDomisiliTempatTinggal', 'WebController@syaratDomisiliTempatTinggal');
Route::get('/syaratTanah', 'WebController@syaratTanah');
Route::get('/syaratPindah', 'WebController@syaratPindah');
Route::get('/syaratPindahWilayah', 'WebController@syaratPindahWilayah');
Route::get('/contact', 'WebController@contact');

Route::get('/file-download', [DownloadFileController::class, 'Blankosuratkematian'])->name('file.download.index');

Route::get('/file-download2', [DownloadFileController::class, 'BlankosuratpengantarRTRW'])->name('file.download.index');


Route::get('/file-download3', [DownloadFileController::class, 'BlankoformulirpermohonanKKbaruWNI'])->name('file.download.index');


