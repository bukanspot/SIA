<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = ['nama_pegawai', 'jabatan_pegawai_id', 'alamat'];

    public function jabatan_pegawai(){
        return $this->belongsTo(JabatanPegawai::class);
    }
}
