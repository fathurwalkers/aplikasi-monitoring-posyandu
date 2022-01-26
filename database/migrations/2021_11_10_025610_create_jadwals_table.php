<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalsTable extends Migration
{
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->id();

            $table->string('nama_posyandu')->nullable();
            $table->string('alamat_posyandu')->nullable();
            $table->dateTime('tanggal_posyandu')->nullable();
            $table->string('kecamatan_posyandu')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
