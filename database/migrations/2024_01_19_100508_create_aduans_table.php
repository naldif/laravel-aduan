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
        Schema::create('aduans', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Kolom ini menyimpan judul aduan dengan tipe data VARCHAR (string).
            $table->string('slug')->unique(); // Kolom ini menyimpan slug yang unik untuk identifikasi URL dengan tipe data VARCHAR (string).
            $table->string('image'); // Kolom ini menyimpan nama berkas gambar dengan tipe data VARCHAR (string).
            $table->unsignedBigInteger('id_kecamatan'); // Kolom ini menyimpan ID kecamatan dengan tipe data INTEGER (unsigned).
            $table->string('kecamatan'); // Kolom ini menyimpan nama kecamatan dengan tipe data VARCHAR (string).
            $table->string('desa_kelurahan'); // Kolom ini menyimpan nama desa atau kelurahan dengan tipe data VARCHAR (string).
            $table->text('isi_aduan'); // Kolom ini menyimpan isi aduan dengan tipe data TEXT.
            $table->unsignedInteger('user_id'); // Kolom ini menyimpan ID pengguna yang membuat aduan dengan tipe data INTEGER (unsigned).
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aduans');
    }
};
