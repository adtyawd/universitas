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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_pendamping');
            $table->string('nama_toko');
            $table->string('no_wa')->unique();
            $table->string('email')->unique();
            $table->boolean('tampil')->default(0);
            $table->boolean('status_daftar')->default(0);
            $table->string('qr')->nullable();
            $table->string('idcard')->nullable();
            $table->foreignId('nomor_undian_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};
