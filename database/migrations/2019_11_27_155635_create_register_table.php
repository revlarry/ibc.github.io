<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->integer('telephone');
            $table->string('age');
            $table->string('gender');
            $table->string('churchgoer');
            $table->boolean('topic1');
            $table->boolean('topic2');
            $table->boolean('topic3');
            $table->boolean('topic4');
            $table->boolean('topic5');
            $table->boolean('topic6');
            $table->string('topic1txt');
            $table->string('topic2txt');
            $table->string('topic3txt');
            $table->string('topic4txt');
            $table->string('topic5txt');
            $table->string('topic6txt');            
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
        Schema::dropIfExists('register');
    }
}
