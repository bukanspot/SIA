<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        $buku = Transaksi::get();
        $jenis = JenisBuku::get();

        return view('buku')
            ->with(['buku' => $buku])
            ->with(['jenis' => $jenis])
        ;
    }
}
