@extends('layouts.navbar')
@section('container')
{{-- Kondisi Jika berhasil Registrasi --}}
<div class="mt-4" style="width:1300px; margin:auto">
    <h3 style="text-align: center" class="mb-4">Delivery Shippment</h3>
    @if(session()->has('berhasil_checkout'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('berhasil_checkout') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Penerima</th>
          <th scope="col">No. Telp</th>
          <th scope="col">Alamat</th>
          <th scope="col">Pos</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Harga Total</th>
          <th scope="col">Gambar Barang</th>
        </tr>
      </thead>
    <tbody>
      @foreach ($checkouts as $checkout)
      @php
          $i=1;
      @endphp
          <tr>
            <th scope="row">@php
                echo $i;
            @endphp</th>
            @php
                $i++;
            @endphp
            <td>{{ $checkout->nama_penerima }}</td>
            <td>{{ $checkout->nomor }}</td>
            <td>{{ $checkout->alamat }}</td>
            <td>{{ $checkout->pos }}</td>
            <td>{{ $checkout->keterangan }}</td>
            <td>{{ $checkout->nama_barang }}</td>
            <td>{{ $checkout->jumlah_beli }}</td>
            <td>Rp. {{ $checkout->harga_barang*$checkout->jumlah_beli}}</td>
            <td><img src="{{ asset('storage/'.$checkout->gambar_barang)}}" width="150px" height="100px"></td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>
  
  

@endsection