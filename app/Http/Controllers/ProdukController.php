<?php

namespace App\Http\Controllers;
use App\Models\dataProduk;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Illuminate\Support\Facades\Auth;
use carbon\Carbon;
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

    public function pesan(Request $request, $produkID)
    {
        $produk = dataProduk::where('id',$produkID)->first();
        $tanggal = Carbon::now();


        // VALIDASI APAKAH MELEBIHI STOK
        if($request->jumlah_pesan > $produk->stok)
        {
            return redirect('detailProduk/'.$produkID);
        }

        // CEK VALIDASI
        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
    

        // SIMPAN KE DATABASE PESANAN
        if(empty($cek_pesanan))
        {
            $pesanan = new Pesanan;
            $pesanan->user_id = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->jumlah_harga = 0;
            $pesanan->save();
        }
        
        // SIMPAN DATABASE KE PESANAN DETAIL
        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();


        // CEK PESANAN DETAIL
        $cek_pesanan_detail = PesananDetail::where('produk_id', $produk->id)->where('pesanan_id', $pesanan_baru->id)->first();
        if(empty($cek_pesanan_detail))
        {
            $pesanan_detail = new PesananDetail;
            $pesanan_detail->produk_id = $produk->id;
            $pesanan_detail-> pesanan_id = $pesanan_baru->id;
            $pesanan_detail-> jumlah  = $request->jumlah_pesan;
            $pesanan_detail-> jumlah_harga = $produk->harga*$request->jumlah_pesan;
            $pesanan_detail->save();
        }else 
            {
                $pesanan_detail = PesananDetail::where('produk_id', $produk->id)->where('pesanan_id', $pesanan_baru->id)->first();

                $pesanan_detail-> jumlah  =  $pesanan_detail-> jumlah+$request->jumlah_pesan;

                // HARGA SEKARANG
                $harga_pesanan_detail_baru = $produk->harga*$request->jumlah_pesan;
                $pesanan_detail-> jumlah_harga = $pesanan_detail-> jumlah_harga+ $harga_pesanan_detail_baru;
                $pesanan_detail->update();
            }
            
        // JUMLAH TOTAL
        $pesanan =   Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan-> jumlah_harga = $pesanan->jumlah_harga+$produk->harga*$request->jumlah_pesan;
        $pesanan->update();
        

        return redirect('/');


    }


}

?>