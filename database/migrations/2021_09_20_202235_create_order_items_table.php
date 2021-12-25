<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('orderItemID');
            $table->unsignedBigInteger('orderID')->index()->nullable();
            $table->foreign('orderID')->references('orderID')->on('orders')->onDelete('cascade')->onUpdate('No Action');
            $table->unsignedBigInteger('productID')->index();
            $table->foreign('productID')->references('product_id')->on('products')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('quantity')->default(0);
            $table->double('price')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('order_items');
    }
}
