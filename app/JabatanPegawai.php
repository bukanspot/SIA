<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JabatanPegawai extends Model
{
    protected $fillable = ['nama_jabatan'];

    public function pegawais(){
        return $this->hasMany(Pegawai::class);
    }
}
