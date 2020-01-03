<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIbcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->integer('telephone');
            $table->string('age');
            $table->string('churchgoer');
            $table->boolean('topic1');
            $table->boolean('topic2');
            $table->boolean('topic3');
            $table->boolean('topic4');
            $table->boolean('topic5');
            $table->boolean('topic6');
            $table->string('topic7');
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
        Schema::dropIfExists('ibc');
    }
}
