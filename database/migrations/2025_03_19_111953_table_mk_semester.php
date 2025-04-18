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
        Schema::create('table_mk_semester', function (Blueprint $table){
            $table->increments('id');
            $table->string('mahasiswa_id')->foreign('mahasiswa_id')->reference('id')->on('table_mahasiswa');
            $table->string('mk_id')->foreign('mk_id')->reference('id')->on('table_mata_kuliah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('table_mk_semester');
    }
};
