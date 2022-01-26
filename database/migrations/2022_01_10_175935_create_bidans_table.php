<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidansTable extends Migration
{
    public function up()
    {
        Schema::create('bidan', function (Blueprint $table) {
            $table->id();

            $table->string('bidan_nama')->nullable();
            $table->string('bidan_sipb')->nullable();
            $table->string('bidan_alamat')->nullable();
            $table->string('bidan_telepon')->nullable();

            $table->unsignedBigInteger('login_id')->nullable()->default(null);
            $table->foreign('login_id')->references('id')->on('login')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bidan');
    }
}
