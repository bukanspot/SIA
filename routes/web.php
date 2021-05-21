<?php

use App\Transaksi;
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
    return view('dashboard');
});


// Buku
Route::get('/buku', 'BukuController@index');
Route::post('/buku', 'BukuController@create');
Route::delete('/buku/{id}', 'BukuController@destroy');
Route::patch('/buku/{id}', 'BukuController@update');

// Pegawai
Route::get('/pegawai', 'PegawaiController@index');
Route::post('/pegawai', 'PegawaiController@create');
Route::delete('/pegawai/{id}', 'PegawaiController@destroy');
Route::patch('/pegawai/{id}', 'PegawaiController@update');

// Transaksi
Route::get('/pinjam', 'TransaksiController@index');
Route::post('/detailpinjam', 'TransaksiController@create');


Route::delete('/pinjam/{id}', 'TransaksiController@destroy');
Route::patch('/pinjam/{id}', 'TransaksiController@update');