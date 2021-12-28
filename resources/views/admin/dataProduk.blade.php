@extends('admin.template.main')

@section("dashboardHome")

<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->

<div class="card-body">

    <a href="{{ url('createProduk') }}" class="btn btn-primary mt-2 mb-2">Add Products</a>
    <table class="table">

    <thead>

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Gambar</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produks as $key => $produk)
        <tr>
            <th scope="col">{{ $key+1 }}</th>
            <td>{{ $produk->nama_brg }}</td>
            <td>{{ $produk->keterangan }}</td>
            <td>{{ $produk->kategori }}</td>
            <td>{{ $produk->harga }}</td>
            <td>{{ $produk->stok }}</td>
            <td><img src="{{ url('img') }}/{{ $produk->gambar }}" style="width: 40px; height: 40px;"
                    alt="{{ $produk->gambar }}"></td>
            <td>
                <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-success">Edit</a> <br>
                <a href="{{ route('produk.destroy', $produk->id) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>



















    <!-- /top tiles -->
</div>
</div>
<!-- /page content -->



@endsection
