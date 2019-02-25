<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParigatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parigates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Ten_khach_hang');
            $table->date('Ngay_sinh');
            $table->string('Email');
            $table->string('Tinh_Thanh');
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
        Schema::dropIfExists('parigates');
    }
}
