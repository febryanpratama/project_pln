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
        Schema::create('lta_proses', function (Blueprint $table) {
            $table->id();
            $table->integer('komponen_id');
            $table->string('evident')->nullable();
            $table->string('safety')->nullable();
            $table->string('outage')->nullable();
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
        Schema::dropIfExists('lta_proses');
    }
};
