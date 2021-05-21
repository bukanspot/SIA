<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $fillable = ['buku_id', 'transaksi_id'];

    public function bukus(){
        return $this->hasMany(Buku::class);
    }

    public function transaksis(){
        return $this->hasMany(Transaksi::class);
    }
}
