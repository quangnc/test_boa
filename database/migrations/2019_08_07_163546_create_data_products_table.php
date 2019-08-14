<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_products', function (Blueprint $table) {
            $table->increments('data_product_id')->length(11);
            $table->integer('sort_order')->length(3)->unsigned();
            $table->integer('product_id')->length(11)->unsigned();
            $table->tinyInteger('status')->length(1)->unsigned();
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
        Schema::dropIfExists('data_products');
    }
}
