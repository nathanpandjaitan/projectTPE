<?php

namespace App\Http\Controllers;
use App\Models\dataProduk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index ()
    {
        $produks = dataProduk::all();
        return view('users.dashboardToko', compact('produks'), [
            "title" => "Dashboard Toko"
        ]);
    }

    public function DetailProduk ($produkID)
    {
        $produk = dataProduk::where('id',$produkID)->first();
        return view('users.detailProduk', compact('produk') ,[
            "title" => "Detail Produk"
        ]);

    }


}

?>