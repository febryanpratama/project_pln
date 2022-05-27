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
        Schema::create('fungsi_sistems', function (Blueprint $table) {
            $table->id();
            $table->integer('swbs_id');
            $table->integer('subsistem_id');
            $table->integer('komponen_id');
            $table->string('kode_fungsi');
            $table->string('uraian_fungsi')->nullable();

            $table->string('kode_kegagalan_fungsi');
            $table->string('kegagalan_fungsi');
            $table->string('uraian_kegagalan_fungsi');
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
        Schema::dropIfExists('fungsi_sistems');
    }
};
