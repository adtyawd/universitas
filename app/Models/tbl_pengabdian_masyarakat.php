<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_pengabdian_masyarakat extends Model
{
    use HasFactory;

    protected $table = 'tbl_pengabdian_masyarakats';// Nama tabel di database
    protected $primaryKey = 'idpengabdian'; // Primary key tabel
    public $timestamps = false; // Ubah menjadi true jika tabel memiliki timestamps

    protected $fillable = [
        'idpengabdian',
        'tgl_transaksi',
        'jumlah'
    ];
}
