@extends('layouts.main')
<head>
    <style>
        html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: -webkit-box;
  display: flex;
  -ms-flex-align: center;
  -ms-flex-pack: center;
  -webkit-box-align: center;
  align-items: center;
  -webkit-box-pack: center;
  justify-content: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.form-signin input{
    border-radius: 0; 
}

    </style>
</head>
<body class="text-center">
    <form class="form-signin" method="POST" action="/login">
        @csrf
        
        {{-- Kondisi Jika berhasil Registrasi --}}
        @if(session()->has('berhasil_regist'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('berhasil_regist') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        {{-- Kondisi Jika Gagal Login --}}
        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="fs-1 mb-3">
            <i class="bi bi-box-arrow-in-right"></i>
        </div>

        <h1 class="h3 mb-3 font-weight-normal">Login Page</h1>
        <input type="text" id="inputusername" class="form-control" placeholder="Username..." name="username" required autofocus>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password..." name="password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <br>
        <br>

        <small class="d-block text-center">Register Akun Baru? <a href="/register">Klik Disini!</a> </small>
        <p class="mt-5 mb-3 text-muted">&copy; Islam Cahya Wicaksana</p>
    </form>
  </body>
</html>