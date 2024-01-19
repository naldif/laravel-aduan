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
        Schema::create('post_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('post_id'); // Kolom ini menyimpan ID posting yang terkait dengan tipe data INTEGER (unsigned).
            $table->unsignedBigInteger('tag_id'); // Kolom ini menyimpan ID tag yang terkait dengan tipe data INTEGER (unsigned).

            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            // Membuat foreign key yang menghubungkan kolom 'post_id' dengan kolom 'id' di tabel 'posts'.
            // onDelete('cascade') berarti jika posting dihapus, semua catatan yang terkait dalam 'post_tag' juga akan dihapus.

            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            // Membuat foreign key yang menghubungkan kolom 'tag_id' dengan kolom 'id' di tabel 'tags'.
            // onDelete('cascade') berarti jika tag dihapus, semua catatan yang terkait dalam 'post_tag' juga akan dihapus.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag');
    }
};
