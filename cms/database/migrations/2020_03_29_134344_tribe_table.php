<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TribeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tribes', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_password');
            $table->integer('user_image');
            $table->string('user_address');
            $table->increments('user_gender');
            $table->dateTime('user_birth');
            $table->boolean('instructor');
            $table->dateTime('user_created');
            $table->dateTime('user_updated');
            $table->boolean('user_deleted');
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
        Schema::dropIfExists('tribes');
    }
}
