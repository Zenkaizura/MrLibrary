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
        Schema::create('buku_novel', function (Blueprint $table) {
            $table->id();
            $table->string('penulis', 255)->nullable();
            $table->string('daftar_isi', 255)->nullable();
            $table->string('daftar_pustaka', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_novel');
    }
};