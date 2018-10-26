<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInShoppingCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_shopping_carts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('shopping_cart_id')->unsigned()->comment('Id de mi carrito de compras');
            $table->integer('count')->unsigned()->default(0);
            $table->timestamps();

            $table->foreign("product_id")->references("id")->on("products")->onDelete('cascade');
            $table->foreign("shopping_cart_id")->references("id")->on("shopping_carts")->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_shopping_carts');
    }
}
