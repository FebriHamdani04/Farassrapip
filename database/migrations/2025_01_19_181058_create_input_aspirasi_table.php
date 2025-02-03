<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputAspirasiTable extends Migration
{
    public function up()
    {
        Schema::create('input_aspirasi', function (Blueprint $table) {
            $table->id('id_pelaporan');
            $table->integer('nis');
            $table->enum('pilihan', ['Siswa', 'Orang Tua']);
            $table->unsignedBigInteger('id_kategori');
            $table->string('lokasi', 50);
            $table->string('ket', 50);
            $table->string('gambar')->nullable();
            $table->timestamps();

            $table->foreign('nis')
                  ->references('nis')
                  ->on('siswa')
                  ->onDelete('cascade');

            $table->foreign('id_kategori')
                  ->references('id_kategori')
                  ->on('aspirasi')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('input_aspirasi');
    }
}