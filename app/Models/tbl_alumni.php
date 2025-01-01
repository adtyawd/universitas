<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_alumni extends Model
{
    use HasFactory;
    protected $table = 'tbl_alumnis';

    protected $primaryKey = 'idalumni'; // Primary key tabel
    public $timestamps = false; // Ubah menjadi true jika tabel memiliki timestamps

    protected $fillable = [
        'idalumni',
        'tgl_transaksi',
        'fakultas',
        'jurusan',
        'prodi',
        'bekerja',
        'belum_bekerja',
        'lanjut_kuliah',
        'wiraswasta'
    ];
}
