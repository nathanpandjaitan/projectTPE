<?php

namespace App\Http\Controllers;
use App\Models\dataProduk;
use Illuminate\Http\Request;


class dataProdukController extends Controller

{
    public function index ()
    {
        $produks = dataProduk::all();
        return view('admin.dataProduk', compact('produks'), [
            "title" => "Data Produk"
        ]);
    }


    public function create ()
    {
        return view('admin.createProduk', [
            "title" => "Tambah Produk"
        ]);
    }

    public function submit (Request $request)
    {
        dataProduk::create([
            'nama_brg' => $request->nama_brg,
            'keterangan'=> $request->keterangan,
            'kategori'=> $request->kategori,
            'harga'=> $request->harga,
            'stok'=> $request->stok,
            'gambar' => $request->gambar,
        ]);
        return redirect( '/dataProduk');
    }

    public function edit ($produkID)
    {
        $produk = dataProduk::where('id',$produkID)->first();
        return view('admin.editProduk', compact('produk') ,[
            "title" => "Edit Produk"
        ]);

    }

    public function update(Request $request, $produkID)
    {
        $produk = dataProduk::find($produkID);
        $produk->update([
            'nama_brg' => $request->nama_brg,
            'keterangan'=> $request->keterangan,
            'kategori'=> $request->kategori,
            'harga'=> $request->harga,
            'stok'=> $request->stok,
            'gambar' => $request->gambar,
        ]);
        return redirect ('/dataProduk');
    }

    public function destroy($produkID)
    {
        dataProduk::destroy($produkID);
        return redirect ('/dataProduk');
    }
}



?>

