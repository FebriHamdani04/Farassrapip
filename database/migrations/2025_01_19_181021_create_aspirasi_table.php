<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspirasiTable extends Migration
{
    public function up()
    {
        Schema::create('aspirasi', function (Blueprint $table) {
            $table->id('id_aspirasi');
            $table->enum('status', ['Menunggu', 'Proses', 'Selesai', 'Ditolak'])->default('Menunggu');
            $table->unsignedBigInteger('id_kategori');
            $table->string('feedback')->nullable();
            $table->unsignedBigInteger('admin_id');
            $table->timestamps();

            $table->foreign('id_kategori')
                  ->references('id_kategori')
                  ->on('kategori')
                  ->onDelete('cascade');

            $table->foreign('admin_id')
                  ->references('id')
                  ->on('admin')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('aspirasi');
    }
}