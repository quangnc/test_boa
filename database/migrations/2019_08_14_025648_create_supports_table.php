<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supports', function (Blueprint $table) {
            $table->increments('support_id')->length(11);
            $table->integer('sort_order')->length(3)->unsigned();
            $table->tinyInteger('status')->length(1)->unsigned();
            $table->string('image', 255);
            $table->string('phone', 255);
            $table->string('linkSkype', 255);
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
        Schema::dropIfExists('supports');
    }
}
