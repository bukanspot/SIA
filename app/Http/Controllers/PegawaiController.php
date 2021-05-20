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

    public function update(Request $request, $id)
    {
        $request->validate(
            ['nama_pegawai'=> 'required'],
            ['jabatan_id' => 'required'],
            ['alamat' => 'required']
        );

        Pegawai::where('id', $id)
            ->update([
                'nama_pegawai' => $request->nama_pegawai,
                'jabatan_pegawai_id' => $request->jabatan_id,
                'alamat' => $request->alamat
            ]);
        return back();
    }
}
