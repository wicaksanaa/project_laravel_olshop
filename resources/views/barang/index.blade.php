@extends('layouts.navbar')
@section('title', 'Halaman Utama')

@section('container')
<div class="container">
    <h3 style="text-align: center" class="mt-4">Halaman Barang</h3>
    @foreach ($barangs as $barang)
    <div class="card justify-content-center mt-4" style="width: 15rem; float: left; margin-left:27.5px;">
        <img class="card-img-top" src="{{ asset('storage/' . $barang->image ) }}" width="100px" height="150px" alt="Card image cap">
        <div class="card-body text-center">
            <h5 class="card-title">{{ $barang->nama }}</h5>
            {{-- <p class="card-text">Rp.{{ $barang->harga }}</p> --}}
            <a href="barang/{{ $barang->id }}" class="btn btn-primary">Details</a>
        </div>
    </div>
    @endforeach
</div>
@endsection