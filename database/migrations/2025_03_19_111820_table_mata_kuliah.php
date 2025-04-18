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
        Schema::create('table_mata_kuliah', function (Blueprint $table){
            $table->increments('id');
            $table->string('kode_mk')->unique();
            $table->string('nama_mk')->unique();
            $table->enum('jurusan', ['Bisnis Digital', 'Sistem dan Teknologi Informasi', 'Kewirausahaan']);
            $table->integer('semester');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('table_mata_kuliah');
    }
};
