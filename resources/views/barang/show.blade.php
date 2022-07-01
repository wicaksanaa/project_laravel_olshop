@extends('layouts.navbar')
@section('container')
<div class="container mt-4" style="max-width: 450px;" >
    <div class="card mb-5">
        <img class="card-img-top" src="{{ asset('storage/' . $barang->image ) }}" alt="Card image cap">
        <div class="card-body text-center">
            <h5 class="card-title">{{ $barang->nama }}</h5>
            <p class="card-text">Jenis : {{ $barang->jenis }}</p>
            <p class="card-text">Harga : Rp.{{ $barang->harga }}</p>
            <p class="card-text">Jumlah : {{ $barang->jumlah }}</p>
            <a href="{{ $barang->id }}/edit" class="btn btn-info">Edit</a>
            <form action="{{$barang->id}}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection