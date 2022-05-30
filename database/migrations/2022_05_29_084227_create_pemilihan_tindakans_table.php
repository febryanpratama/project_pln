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
        Schema::create('pemilihan_tindakans', function (Blueprint $table) {
            $table->id();
            $table->string('komponen_id');
            $table->string('pertanyaan_1')->nullable('-');
            $table->string('pertanyaan_2')->nullable('-');
            $table->string('pertanyaan_3')->nullable('-');
            $table->string('pertanyaan_4')->nullable('-');
            $table->string('pertanyaan_5')->nullable('-');
            $table->string('pertanyaan_6')->nullable('-');
            $table->string('pertanyaan_7')->nullable('-');
            $table->string('pertanyaan_8')->nullable('-');
            $table->string('category');
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
        Schema::dropIfExists('pemilihan_tindakans');
    }
};
