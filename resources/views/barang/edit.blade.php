@extends('layouts.navbar')
@section('container')
    <div class="container">
        <div class="col-7">
            <h2>Form Edit Data Barang</h2>
            <form method="post" action="/barang/{{$barang->id}}/edit" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan Nama" name="nama" value="{{$barang->nama}}" required>
                </div>
                <div class="form-group">
                    <label for="jenis">jenis</label>
                    <input type="text" class="form-control" id="jenis" aria-describedby="emailHelp" placeholder="Masukan jenis" name="jenis" value="{{$barang->jenis}}" required>
                </div>
                <div class="form-group">
                    <label for="harga">harga</label>
                    <input type="number" class="form-control" id="harga" aria-describedby="hargaHelp" placeholder="Masukan harga" name="harga" value="{{$barang->harga}}" required>
                </div>
                <div class="form-group">
                    <label for="jumlah">jumlah</label>
                    <input type="text" class="form-control" id="jumlah" aria-describedby="emailHelp" placeholder="Masukan jumlah" name="jumlah" value="{{$barang->jumlah}}" required>
                </div>
                <div class="form-group">
                    <input type="hidden" name="gambarLama" id="gambarLama" value="{{ $barang->image }}">
                    <label for="jumlah">Gambar</label>
                    @if ($barang->image)
                        <img src="{{ asset('storage/'.$barang->image) }}" class="img-preview img-fluid mt-1 mb-2 col-sm-5 d-block" id="gambar" alt="">
                    @else
                        <img class="img-preview img-fluid mt-1 mb-2 col-sm-5 d-block" id="gambar"></img>
                    @endif
                    <input class="form-control" type="file" id="formFile" id="image" name="image" onchange="preview()">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Edit</button>
        </form>
        </div>
    </div>
@endsection
<script>
    function preview() {
      gambar.src=URL.createObjectURL(event.target.files[0]);
  }
  </script>