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
        Schema::create('tbl_tenaga_pendidiks', function (Blueprint $table) {
            $table->id('idpendidik');
            $table->date('tgl_transaksi');
            $table->string('unit', 100);
            $table->string('jurusan', 100);
            $table->string('prodi', 100);
            $table->integer('professor_pns');
            $table->integer('professor_non_pns');
            $table->integer('lektor_kepala_pns');
            $table->integer('lektor_kepala_non_pns');
            $table->integer('lektor_pns');
            $table->integer('lektor_non_pns');
            $table->integer('asisten_ahli_pns');
            $table->integer('asisten_ahli_non_pns');
            $table->integer('tenaga_pengajar_pns');
            $table->integer('tenaga_pengajar_non_pns');
            $table->integer('terkualifikasi_s3');
            $table->integer('terkualifikasi_kompetensi_profesi');
            $table->integer('terkualifikasi_praktisi');
            $table->integer('pegawai_pppk');
            $table->integer('nidn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_tenaga_pendidiks');
    }
};
