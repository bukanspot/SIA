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

    public function create(Request $request)
    {
        Buku::create($request->all());
        return back();
    }
    
    public function destroy($id)
    {
        Buku::destroy($id);
        return back();
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            ['nama_buku'=> 'required'],
            ['jenis_id' => 'required'],
            ['stok' => 'required']
        );

        Buku::where('id', $id)
            ->update([
                'nama_buku' => $request->nama_buku,
                'jenis_buku_id' => $request->jenis_id,
                'stok' => $request->stok
            ]);
        return back();
    }
}
