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

Route::get('/masyarakat', 'App\Http\Controllers\MasyarakatController@index')->name('masyarakat');
Route::get('/barang', 'App\Http\Controllers\BarangController@index')->name('barang');
Route::get('/history', 'App\Http\Controllers\HistoryController@index')->name('history');
