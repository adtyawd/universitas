<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_jlh_mahasiswa_berprestasi extends Model
{
    use HasFactory;
    protected $table = 'tbl_jlh_mahasiswa_berprestasis';// Nama tabel di database
    protected $primaryKey = 'idprestasi'; // Primary key tabel
    public $timestamps = false; // Ubah menjadi true jika tabel memiliki timestamps

    protected $fillable = [
        'idprestasi',
        'tgl_transaksi',
        'fakultas',
        'jurusan',
        'prodi',
        'kategori',
        'bidang',
        'jenis',
        'jumlah'
    ];
}
