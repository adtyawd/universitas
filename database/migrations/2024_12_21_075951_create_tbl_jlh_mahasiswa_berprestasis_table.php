<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_jlh_mahasiswa_berprestasis', function (Blueprint $table) {
            $table->id('idprestasi');
            $table->date('tgl_transaksi');
            $table->string('fakultas');
            $table->string('jurusan');
            $table->string('prodi');
            $table->string('kategori');
            $table->string('bidang');
            $table->string('jenis');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_jlh_mahasiswa_berprestasis');
    }
};
