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
        Schema::create('table_buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku', 255)->nullable()->unique();
            $table->string('jenis_buku', 255)->nullable();
            $table->string('tenggat_waktu', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_buku');
    }
};
