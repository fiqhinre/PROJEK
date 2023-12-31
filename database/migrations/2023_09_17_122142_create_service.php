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
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('NAMA_SERVICE');
            $table->string('DESKRIPSI');
            $table->string('KATEGORI_LAYANAN');
            $table->unsignedBigInteger('id_kategorihewan');
            $table->foreign('id_kategorihewan')->references('id_kategorihewan')->on('kategorihewan')->onDelete('cascade');
            $table->boolean('PICK_UP');
            $table->float('HARGA');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_akhir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};


