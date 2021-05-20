<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JabatanPegawai extends Model
{
    protected $fillable = ['nama_jabatan'];

    public function pegawai(){
        return $this->hasMany(Pegawai::class);
    }
}
