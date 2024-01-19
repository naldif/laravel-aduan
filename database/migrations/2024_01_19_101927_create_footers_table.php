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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('platform'); // Kolom ini menyimpan informasi tentang platform dengan tipe data VARCHAR (string).
            $table->string('nama_halaman'); // Kolom ini menyimpan nama halaman dengan tipe data VARCHAR (string).
            $table->string('link_url'); // Kolom ini menyimpan URL atau tautan terkait dengan halaman dengan tipe data VARCHAR (string).
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
