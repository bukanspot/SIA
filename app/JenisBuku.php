<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisBuku extends Model
{
    protected $fillable = ['nama_jenis'];

    public function bukus(){
        return $this->hasMany(Buku::class);
    }
}
