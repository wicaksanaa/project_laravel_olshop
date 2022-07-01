@extends('layouts.navbar')
@section('title', 'Halaman Utama')

@section('container')
<div class="container">
    <h3 style="text-align: center" class="mt-4">Halaman Utama</h3>
    @foreach ($barangs as $barang)
    <div class="card justify-content-center mt-4" style="width: 15rem; float: left; margin-left:27.5px;">
        <img class="card-img-top" src="{{ asset('storage/' . $barang->image ) }}" width="100px" height="150px" alt="Card image cap">
        <div class="card-body text-center">
            <h5 class="card-title">{{ $barang->nama }}</h5>
            <p class="card-text">Stock : {{ $barang->jumlah }}</p>
            <p class="card-text"><i class="fa fa-money" style="font-size:24px"></i> Rp.{{ $barang->harga }}</p>
            <a href="/checkout/{{ $barang->id }}" class="btn btn-info">Checkout</a>
        </div>
    </div>
    @endforeach
</div>
@endsection