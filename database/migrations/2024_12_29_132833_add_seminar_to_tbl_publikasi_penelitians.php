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
        Schema::table('tbl_publikasi_penelitians', function (Blueprint $table) {
            $table->integer('seminar')->after('prosiding')->default(0)->comment('Jumlah publikasi seminar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_publikasi_penelitians', function (Blueprint $table) {
            $table->dropColumn('seminar');
        });
    }
};
