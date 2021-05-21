<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::get();

        return view('pinjam')->with(['pegawai' => $pegawai]);
    }

    public function create(Request $request)
    {
        Transaksi::create($request->all());

        $id_transaksi = Transaksi::latest()->first();
        return view('detailpinjam')->with(['id_transaksi' => $id_transaksi]);
    }
}
