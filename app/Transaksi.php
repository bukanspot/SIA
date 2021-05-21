<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['pegawai_id', 'nama_peminjam', 'alamat', 'telepon'];

    public function pegawais(){
        return $this->belongsTo(Pegawai::class);
    }
}
