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
        Schema::create('detail_interval_waktus', function (Blueprint $table) {
            $table->id();
            $table->integer('interval_waktu_id');
            $table->string('t');
            $table->string('fkecilt');
            $table->string('fbesart');
            $table->string('rt');
            $table->string('ht');
            $table->string('dt');
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
        Schema::dropIfExists('detail_interval_waktus');
    }
};
