@extends('layouts.main')

@extends('layouts.main')
<head>
    <style>
        .form-registrasi {
            width: 100%;
            max-width: 500px;
            padding: 15px;
            margin: 0 auto;
            margin-top: 30px;
        }

        .form-registrasi input{
            border-radius: 0; 
        }

    </style>
</head>
<body class="text-center">
    <form method="POST" action="/register" class="form-registrasi">
        @csrf
        <div class="fs-1 mb-3">
            <i class="bi bi-box-arrow-in-right"></i>
        </div>
      <h1 class="h3 mb-3 font-weight-normal">Register Page</h1>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingNama" placeholder="Nama" name="name">
        <label for="floatingNama">Nama</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" id="floatingUsername" placeholder="Username" name="username">
        <label for="floatingUsername">Username</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingEmail" placeholder="Email" name="email">
        <label for="floatingEmail">Alamat Email</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
      </div>
      
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      <br>
      <br>
      <small class="d-block text-center">Sudah Punya Akun? <a href="/login">Klik Disini!</a> </small>
      <p class="mt-5 mb-3 text-muted">&copy; Islam Cahya Wicaksana</p>
    </form>
  </body>
</html>