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
        Schema::create('interval_waktus', function (Blueprint $table) {
            $table->id();
            $table->integer('komponen_id');
            $table->string('waktu_korektif');
            $table->string('waktu_preventif');
            $table->string('tf');
            $table->string('tp');
            $table->string('mu');
            $table->string('sigma');
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
        Schema::dropIfExists('interval_waktus');
    }
};
