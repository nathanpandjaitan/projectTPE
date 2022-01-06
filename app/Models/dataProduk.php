<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataProduk extends Model
{
    use HasFactory;

    public $timestamps = false;
    // const UPDATED_AT = null;
    // const CREATED_AT = null;

    protected $fillable = ['nama_brg', 'keterangan', 'kategori', 'harga', 'stok', 'gambar'];


    public function pesanan_detail()
    {
        return $this->hasMany('App\Models\PesananDetail', 'produk_id', 'id');
    }
}



