<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_produk_inovasi extends Model
{
    use HasFactory;

    protected $table = 'tbl_produk_inovasis';// Nama tabel di database
    protected $primaryKey = 'idproduk'; // Primary key tabel
    public $timestamps = false; // Ubah menjadi true jika tabel memiliki timestamps

    protected $fillable = [
        'idproduk',
        'tgl_transaksi',
        'jumlah'
    ];
}
