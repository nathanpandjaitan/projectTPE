@extends('admin.template.main')

@section('dashboardHome')


<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->

    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h1>Edit Data Barang</h1>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url('/updateProduk/'.$produk->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="input1" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="input1" name="nama_brg" value="{{  $produk->nama_brg }}">
                    </div>
                    <div class="mb-3">
                        <label for="input1">Keterangan</label>
                        <input type="text" class="form-control" id="input1" name="keterangan" value="{{  $produk->keterangan }}">
                    </div>
                    <div class="mb-3">
                        <label for="input1">Kategori</label>
                        <input type="text" class="form-control" id="input1" name="kategori" value="{{  $produk->kategori }}">
                    </div>
                    <div class="mb-3">
                        <label for="input1">Harga</label>
                        <input type="number" class="form-control" id="input1" name="harga" value="{{  $produk->harga }}">
                    </div>
                    <div class="mb-3">
                        <label for="input1">Stok</label>
                        <input type="number" class="form-control" id="input1" name="stok" value="{{  $produk->stok }}">
                    </div>
                    <div class="mb-3">
                        <label for="input1">Gambar</label>
                        <input type="text" class="form-control" id="input1" name="gambar" value="{{  $produk->gambar }}">
                    </div>
                    <a href="/dataProduk" class="btn btn-primary">Back</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- /top tiles -->
</div>
<!-- /page content -->

@endsection
