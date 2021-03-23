<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('feature');
            $table->text('description');
            $table->string('falsePrice');
            $table->string('truePrice');
            $table->string('slug');
            $table->string('mainImage');
            $table->unsignedInteger('brand_id');
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->unsignedInteger('shop_id');
            $table->foreign('shop_id')->references('id')->on('shops');
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
        Schema::dropIfExists('products');
    }
}
