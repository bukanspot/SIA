<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\JabatanPegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::get();
        $jabatan = JabatanPegawai::get();

        return view('pegawai')
            ->with(['pegawai' => $pegawai])
            ->with(['jabatan' => $jabatan])
        ;
    }

    public function create(Request $request)
    {
        Pegawai::create($request->all());
        return back();
    }
    
    public function destroy($id)
    {
        Pegawai::destroy($id);
        return back();
    }

    // public function update(Request $request, $id)
    // {
    //     $request->validate(
    //         ['nama_buku'=> 'required'],
    //         ['jenis_id' => 'required'],
    //         ['stok' => 'required']
    //     );

    //     Pegawai::where('id', $id)
    //         ->update(
    //             ['nama_buku' => $request->nama_buku],
    //             ['jenis_buku_id' => $request->jenis_id],
    //             ['stok' => $request->stok]
    //         );
    //     return back();
    // }
}
