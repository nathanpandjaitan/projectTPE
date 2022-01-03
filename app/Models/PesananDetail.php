<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    use HasFactory;

    public function produk()
    {
        return $this->belongsTo('App\dataProduk', 'produk_id', 'id');
    }

     public function pesanan_detail()
    {
        return $this->belongsTo('App\Pesanan', 'pesanan_id', 'id');
    }
}
