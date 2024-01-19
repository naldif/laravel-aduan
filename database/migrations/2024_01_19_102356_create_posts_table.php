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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Kolom ini menyimpan judul dari posting dengan tipe data VARCHAR (string).
            $table->string('slug')->unique(); // Kolom ini menyimpan slug yang unik untuk identifikasi URL dengan tipe data VARCHAR (string).
            $table->unsignedInteger('category_id'); // Kolom ini menyimpan ID kategori dengan tipe data INTEGER (unsigned).
            $table->unsignedInteger('user_id'); // Kolom ini menyimpan ID pengguna yang membuat posting dengan tipe data INTEGER (unsigned).
            $table->text('content'); // Kolom ini menyimpan konten atau isi dari posting dengan tipe data TEXT.
            $table->string('image'); // Kolom ini menyimpan nama berkas gambar posting dengan tipe data VARCHAR (string).
            $table->text('description'); // Kolom ini menyimpan deskripsi atau ringkasan dari posting dengan tipe data TEXT.
            $table->integer('views_count')->default(0); // Kolom ini menyimpan jumlah tampilan posting dengan tipe data INTEGER, nilai default adalah 0.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
