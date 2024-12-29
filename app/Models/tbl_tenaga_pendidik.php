<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_tenaga_pendidik extends Model
{
    use HasFactory;
    protected $table = 'tbl_tenaga_pendidiks';// Nama tabel di database
    protected $primaryKey = 'idpendidik'; // Primary key tabel
    public $timestamps = false; // Ubah menjadi true jika tabel memiliki timestamps

    protected $fillable = [
        'idpendidik',
        'tgl_transaksi',
        'unit', // Tambahkan 'unit' karena ada di tabel
        'jurusan',
        'prodi',
        'professor_pns',
        'professor_non_pns',
        'lektor_kepala_pns',
        'lektor_kepala_non_pns',
        'lektor_pns',
        'lektor_non_pns',
        'asisten_ahli_pns',
        'asisten_ahli_non_pns',
        'tenaga_pengajar_pns',
        'tenaga_pengajar_non_pns',
        'terkualifikasi_s3',
        'terkualifikasi_kompetensi_profesi',
        'terkualifikasi_praktisi',
        'pegawai_pppk',
        'nidn',
    ];
}
