<?php

use App\Http\Controllers\TransaksiController;
use App\Transaksi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('pinjam');
});

// Transaksi
Route::get('/pinjam', 'TransaksiController@index');
Route::post('/pinjam', 'TransaksiController@create');
Route::post('/pinjam/{id}', 'TransaksiController@add_book');
Route::patch('/pinjam/{id}', 'TransaksiController@update');

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
