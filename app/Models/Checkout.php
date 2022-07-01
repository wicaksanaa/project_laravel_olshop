<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable =[
        'nama_penerima',
        'nomor',
        'alamat',
        'pos',
        'keterangan',
        'gambar_barang',
        'harga_barang',
        'jumlah_beli'
    ];
}