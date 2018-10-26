<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("shopping_cart_id")->unsigned();

            $table->string("recipient_name");
            $table->string("email")->comment('Email para notificar el status del pedido');
            $table->string("telephone");
            $table->string("status")->default("creado");
            $table->string("guide_number")->nullable(true);
            $table->integer("total");
            $table->text('details_order')->nullable();
            $table->string('this')->nullable();
            $table->timestamps();

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
        Schema::dropIfExists('orders');
    }
}
