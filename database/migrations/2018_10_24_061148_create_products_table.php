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
            $table->integer('user_id')->unsigned();
            $table->integer('size_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->integer('model_id')->unsigned();
            $table->string('sku')->nullable()->comment('Identificador interno del Producto');
            $table->string('name');
            $table->string('slug')->comment('URL que identificara el producto al compartirlo en redes sociales');
            $table->double('pricing_client', 6, 2)->comment('Precio Venta a Clientes');;
            $table->double('pricing_stock', 6, 2)->comment('Precio Venta a Proveedor');;
            $table->text('description');
            $table->text('meta_description')->comment('Descripción que aparecera al compartir el producto en redes sociales');
            $table->string('image', 255);
            $table->enum('available', [0, 1])->default(1)->comment('Producto Activo(1)/Inactivo(0)');
            $table->enum('top', [0, 1, 2, 3])->nullable()->comment('Listar mi top 9 de productos más vendidos, 0 section 1, 1 section 2, 2 section 3');
            $table->enum('promotion', [0, 1])->nullable(0)->comment('Listar mis promociones Solo podremos meter 4 a la vez');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('model_id')->references('id')->on('shoe_models')->onDelete('cascade');

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
