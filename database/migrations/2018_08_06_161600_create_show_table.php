<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('clasification_id');
            $table->foreign('clasification_id')->references('id')->on('clasification');

            $table->string('image1');
            $table->string('image2');
            $table->string('title');
            $table->string('description');
            $table->string('duration');
            $table->string('takerest');
            $table->string('gender');
            $table->string('director');
            $table->string('casting');

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
        Schema::dropIfExists('show');
    }
}
