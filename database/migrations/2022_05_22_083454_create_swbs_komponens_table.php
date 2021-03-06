<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swbs_komponens', function (Blueprint $table) {
            $table->id();
            $table->integer('swbs_id')->nullable();
            $table->integer('subsistem_id');
            $table->string('kode');
            $table->string('nama_komponen');
            $table->string('kode_komponen');
            $table->string('uraian_fungsi');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('swbs_komponens');
    }
};
