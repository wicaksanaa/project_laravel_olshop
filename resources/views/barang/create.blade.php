@extends('layouts.navbar')
@section('container')
@extends('layouts.main')

@extends('layouts.main')
<head>
    <style>
        .form-tambah-barang {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            margin-top: 30px;
        }

        .form-tambah-barang input{
            border-radius: 0; 
        }

    </style>
</head>
<body class="text-center">
    <form method="POST" action="/barang/create" class="form-tambah-barang" enctype="multipart/form-data">
        @csrf
      <h1 class="h3 mb-3 font-weight-normal">Form Tambah Barang</h1>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingNama" placeholder="Nama" name="nama">
        <label for="floatingNama">Nama Barang</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingjenis" placeholder="jenis" name="jenis">
        <label for="floatingjenis">Jenis</label>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control" id="floatingharga" placeholder="harga" name="harga">
        <label for="floatingharga">Harga</label>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control" id="floatingjumlah" placeholder="jumlah" name="jumlah">
        <label for="floatingjumlah">Jumlah</label>
      </div>
      <br>
      <div class="form-floating">
        <div class="mb-1">
          <input class="form-control" type="file" id="formFile" id="image" name="image" onchange="preview()">
          <img class="img-preview img-fluid mt-1 mb-2 col-sm-5" id="gambar"></img>
        </div>
      </div>
      
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      <br>
      <br>
    </form>
  </body>
  
</html>

@endsection
<script>
  function preview() {
    gambar.src=URL.createObjectURL(event.target.files[0]);
}
</script>