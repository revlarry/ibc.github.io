<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('telephone');
            $table->string('age');
            $table->string('gender');
            $table->string('churchgoer')->nullable();
            $table->string('topic1')->nullable();
            $table->string('topic1txt')->nullable();
            $table->string('topic2')->nullable();
            $table->string('topic2txt')->nullable();
            $table->string('topic3')->nullable();
            $table->string('topic3txt')->nullable();
            $table->string('topic4')->nullable();
            $table->string('topic4txt')->nullable();
            $table->string('topic5')->nullable();
            $table->string('topic5txt')->nullable();
            $table->string('topic6')->nullable();
            $table->string('topic6txt')->nullable();
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
        Schema::dropIfExists('registers');
    }
}
