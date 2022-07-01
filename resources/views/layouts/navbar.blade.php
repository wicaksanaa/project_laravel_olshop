@extends('layouts.main')
<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container">
        <a class="navbar-brand" href="/">OnlineShop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="/identitas">Identitas</a>
                @auth
                    <a class="nav-link" href="/barang">Barang</a>
                    <a class="nav-link" href="/checkout">Shipment</a>
                @endauth
            </div>
            <div class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Selamat Datang, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/barang/create"><i class="bi bi-card-heading"></i> Tambah Barang</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"> 
                                    <i class="bi bi-box-arrow-left"></i> Logout</button>   
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                        <a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
@yield('container')