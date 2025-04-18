<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('table_mata_kuliah', function (Blueprint $table) {
        $table->timestamps();
    });
}

public function down()
{
    Schema::table('table_mata_kuliah', function (Blueprint $table) {
        $table->dropTimestamps();
    });
}
};