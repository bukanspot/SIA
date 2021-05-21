<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Pegawai;
use App\Buku;
use App\Transaksi;
use App\DetailTransaksi;
use App\JenisBuku;

class TransaksiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::get();
        $buku = Buku::get();

        return view('pinjam')
            ->with(['pegawai' => $pegawai])
            ->with(['buku' => $buku])
        ;
    }

    public function create(Request $request)
    {
        Transaksi::create($request->all());
        $id_transaksi = Transaksi::latest()->first();
        $pegawai = Pegawai::get();
        $buku = Buku::get();
        
        DetailTransaksi::create([
            'buku_id' => $request->buku_id,
            'transaksi_id' => $id_transaksi->id
        ]);

        $id_detail_transaksi = DetailTransaksi::get()->where('transaksi_id', $id_transaksi->id);
        
        $id_buku = DB::select('SELECT * 
        FROM bukus, detail_transaksis, transaksis 
        WHERE bukus.id = detail_transaksis.buku_id 
        AND transaksis.id = detail_transaksis.transaksi_id 
        AND transaksis.id = ?', [$id_transaksi->id]);

        $jenis = JenisBuku::get();
        return view('detailpinjam')
            ->with(['id_transaksi' => $id_transaksi])
            ->with(['pegawai' => $pegawai])
            ->with(['buku' => $buku])
            ->with(['id_buku' => $id_buku])
            ->with(['jenis' => $jenis])
        ;
    }

    public function add_book(Request $request)
    {
        DetailTransaksi::create($request->all());
        $id_transaksi = Transaksi::latest()->first();
        $pegawai = Pegawai::get();
        $buku = Buku::get();

        $id_detail_transaksi = DetailTransaksi::get()->where('transaksi_id', $id_transaksi->id);
        $id_buku = DB::select('SELECT * 
        FROM bukus, detail_transaksis, transaksis 
        WHERE bukus.id = detail_transaksis.buku_id 
        AND transaksis.id = detail_transaksis.transaksi_id 
        AND transaksis.id = ?', [$id_transaksi->id]);

        $jenis = JenisBuku::get();
        return view('detailpinjam')
            ->with(['id_transaksi' => $id_transaksi])
            ->with(['pegawai' => $pegawai])
            ->with(['buku' => $buku])
            ->with(['id_buku' => $id_buku])
            ->with(['jenis' => $jenis])
            ->with(['id_detail_transaksi' => $id_detail_transaksi])
        ;
    }

    public function update(Request $request, $id)
    {
        Transaksi::where('id', $id)
            ->update([
                'status' => '1'
            ]);

        return redirect('/pinjam');
    }
}
