<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_publikasi_penelitian extends Model
{
    use HasFactory;

    protected $table = 'tbl_publikasi_penelitians';// Nama tabel di database
    protected $primaryKey = 'idpenelitian'; // Primary key tabel
    public $timestamps = false; // Ubah menjadi true jika tabel memiliki timestamps

    protected $fillable = [
        'idpenelitian',
        'tgl_transaksi',
        'unit',
        'nasional',
        'internasional',
        'internasional_index',
        'prosiding',
        'seminar',
        'kategori'
    ];

}
