@extends('layouts.navbar')
@section('container')
<head>
    <style>
        .form_checkout{
            width: 800px;
            float: left;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    

<div class="container mt-3">
    <form action="/checkout/create" method="post">
        @csrf
        <div class="card" style="width: 18rem; float:left;">
            <input type="hidden" name="gambar_barang" id="gambar_barang" value="{{ $barang->image }}">
            <img class="card-img-top" src="{{ asset('storage/'.$barang->image) }}" alt="Card image cap">
            <div class="card-body">
                <input type="hidden" name="nama_barang" id="nama_barang" value="{{ $barang->nama }}">
                <h5 class="card-title">{{ $barang->nama }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <input type="hidden" name="harga_barang" id="harga_barang" value="{{ $barang->harga }}">
            <li class="list-group-item">Rp.{{ $barang->harga }}</li>
            <li class="list-group-item">Stock : {{ $barang->jumlah }}</li>
            <div class="container mb-2">
                Jumlah <input class="list-group-item" type="number" name="jumlah_beli" id="jumlah_beli" required>
            </div>
            </ul>
            <div class="card-body text-center">
                <button type="submit"class="btn btn-info">Checkout</button>
            </div>
        </div>
        <div class="form_checkout">
            <div class="mb-3 mt-2">
                <h3>Isi Formulir</h3>
            </div>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="floatingNama" placeholder="Nama" name="nama_penerima" required>
                <label for="floatingNama">Nama Penerima</label>
            </div>
            <div class="form-floating  mb-4">
              <input type="number" class="form-control" id="floatingharga" placeholder="nomor" name="nomor" required>
              <label for="floatingharga">No.Telp</label>
            </div>
            <div class="form-floating  mb-4">
                <input type="text" class="form-control" id="floatingjenis" placeholder="alamat" name="alamat" required>
                <label for="floatingjenis">Alamat Lengkap</label>
            </div>
            <div class="form-floating  mb-4">
                <input type="number" class="form-control" id="floatingjumlah" placeholder="pos" name="pos" required>
                <label for="floatingjumlah">Kode Pos</label>
            </div>
            <div class="form-floating  mb-4">
                <textarea class="form-control" id="floatingjumlah" placeholder="keterangan" name="keterangan" aria-label="With textarea" required></textarea>
                <label for="floatingarea">Keterangan</label>
            </div>
            
        </div>
    </form>
</div>
@endsection
</body>