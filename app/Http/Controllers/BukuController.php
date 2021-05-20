<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\JenisBuku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::get();
        $jenis = JenisBuku::get();

        return view('buku')
            ->with(['buku' => $buku])
            ->with(['jenis' => $jenis])
        ;
    }
}
