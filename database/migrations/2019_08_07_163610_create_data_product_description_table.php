<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataProductDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_product_description', function (Blueprint $table) {
            $table->integer('post_id')->length(11)->unsigned();
            $table->integer('language_id')->length(11)->unsigned();
            $table->string('name', 255);
            $table->string('vacis', 255);
            $table->text('file')->nullable();
            $table->string('field', 255);
            $table->string('city', 255);
            $table->string('place', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_product_description');
    }
}
