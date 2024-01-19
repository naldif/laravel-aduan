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
        Schema::create('aduan_status', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aduan_id'); // Kolom ini menyimpan ID aduan yang terkait dengan tipe data INTEGER (unsigned).
            $table->string('status'); // Kolom ini menyimpan status aduan dengan tipe data VARCHAR (string).
            $table->string('daftar_desa'); // Kolom ini menyimpan daftar desa terkait dengan aduan dengan tipe data VARCHAR (string).
            $table->text('keterangan')->nullable(); // Kolom ini menyimpan keterangan tambahan dengan tipe data TEXT (nullable, artinya dapat kosong).
            $table->timestamps();
            $table->foreign('aduan_id')->references('id')->on('aduans')->onDelete('cascade');
             // Membuat foreign key yang menghubungkan kolom 'aduan_id' dengan kolom 'id' di tabel 'aduans'. 
            // onDelete('cascade') berarti jika rekaman di tabel 'aduans' dihapus, maka juga akan dihapus dari tabel 'aduan_status'.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aduan_status');
    }
};
