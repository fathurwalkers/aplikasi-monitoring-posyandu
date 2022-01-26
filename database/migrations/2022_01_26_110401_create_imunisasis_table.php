<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImunisasisTable extends Migration
{
    public function up()
    {
        Schema::create('imunisasi', function (Blueprint $table) {
            $table->id();

            $table->string('hb')->nullable();
            $table->string('bcg')->nullable();
            $table->string('polio1')->nullable();
            $table->string('polio2')->nullable();
            $table->string('polio3')->nullable();
            $table->string('polio4')->nullable();
            $table->string('dpt1')->nullable();
            $table->string('dpt2')->nullable();
            $table->string('dpt3')->nullable();
            $table->string('ipv')->nullable();
            $table->string('campak')->nullable();

            $table->unsignedBigInteger('bulan_id')->nullable()->default(null);
            $table->foreign('bulan_id')->references('id')->on('bulan')->onDelete('cascade');

            $table->unsignedBigInteger('balita_id')->nullable()->default(null);
            $table->foreign('balita_id')->references('id')->on('balita')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('imunisasi');
    }
}
