<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalitasTable extends Migration
{
    public function up()
    {
        Schema::create('balita', function (Blueprint $table) {
            $table->id();

            $table->string('balita_nama')->nullable();
            $table->string('balita_ttl')->nullable();
            $table->string('balita_jeniskelamin')->nullable();
            $table->string('balita_nik')->nullable();
            $table->string('balita_nama_ortu')->nullable();

            $table->string('balita_provinsi')->nullable();
            $table->string('balita_kota')->nullable();
            $table->string('balita_kecamatan')->nullable();
            $table->string('balita_puskesmas')->nullable();
            $table->string('balita_desa')->nullable();
            $table->string('balita_posyandu')->nullable();

            $table->unsignedBigInteger('login_id')->nullable()->default(null);
            $table->foreign('login_id')->references('id')->on('login')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('balita');
    }
}
