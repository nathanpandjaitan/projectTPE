@extends('admin.template.main')

@section("dashboardHome")

<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->



<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h1>Add Products</h1>
            </div>   
        </div>
        <div class="card-body" >
            <form action="{{ url("/submit") }}" method="POST">
                @csrf
                <div class="mb-3">
                <label for="input1" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="input1" name="nama_brg">
                </div>
                <div class="mb-3">
                <label for="input1">Keterangan</label>
                <input type="text" class="form-control" id="input1" name="keterangan">
                    </div>
                <div class="mb-3">
                <label for="input1">Kategori</label>
                <input type="text" class="form-control" id="input1" name="kategori">
                </div>
                <div class="mb-3">
                <label for="input1">Harga</label>
                <input type="number" class="form-control" id="input1" name="harga">
                </div>
                <div class="mb-3">
                <label for="input1">Stok</label>
                <input type="number" class="form-control" id="input1" name="stok">
                </div>
                <div class="mb-3">
                <label for="input1">Gambar</label>
                <input type="text" class="form-control" id="input1" name="gambar">
                </div>
                <a href="/dataProduk" class="btn btn-primary">Back</a>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
















    <!-- /top tiles -->
</div>
</div>
<!-- /page content -->



@endsection
