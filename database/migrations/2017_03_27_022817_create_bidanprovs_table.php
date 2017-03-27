<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidanprovsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidanprovs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('hckey');
            $table->string('wilayah');
            $table->string('penduduk')->nullable();
            $table->string('bidan')->nullable();
            $table->string('anggota')->nullable();
            $table->string('sekolah')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bidanprovs');
    }
}
