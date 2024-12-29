<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_jlh_mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'tbl_jlh_mahasiswas';// Nama tabel di database
    protected $primaryKey = 'idmhs'; // Primary key tabel
    public $timestamps = false; // Ubah menjadi true jika tabel memiliki timestamps

    protected $fillable = [
        'idmhs',
        'tgl_transaksi',
        'fakultas',
        'jurusan',
        'prodi',
        'kategori',
        'jumlah'
    ];
}
