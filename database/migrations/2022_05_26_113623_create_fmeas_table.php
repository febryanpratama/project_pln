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
        Schema::create('fmeas', function (Blueprint $table) {
            $table->id();
            $table->integer('swbs_id');
            $table->integer('komponen_id');
            $table->integer('severity_id');
            $table->integer('occurence_id');
            $table->integer('detection_id');
            $table->date('tanggal');
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
        Schema::dropIfExists('fmeas');
    }
};
