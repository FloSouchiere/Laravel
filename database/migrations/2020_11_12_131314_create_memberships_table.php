<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('license_id');
            $table->string('payment_type');
            $table->decimal('price');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('license_id')->references('id')->on('licenses');

        });
    }

    public function down()
    {
        Schema::dropIfExists('memberships');
    }
}
