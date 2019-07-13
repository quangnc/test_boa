<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('language_id')->length(11)->unsigned();
            $table->string('name', 32);
            $table->string('code', 5);
            $table->string('locate', 255);
            $table->string('image', 255);
            $table->integer('sort_order')->length(3)->unsigned(); 
            $table->tinyInteger('status')->length(1)->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
}
