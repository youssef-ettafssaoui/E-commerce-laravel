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
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('courte_description')->nullable();
            $table->text('description');
            $table->decimal('prix_ordinaire');
            $table->decimal('prix_solde')->nullable();
            $table->string('SKU');
            $table->enum('stock_statut',['instock','outofstock']);
            $table->boolean('Envedette')->default(false);
            $table->unsignedInteger('quantite')->default(10);
            $table->string('image')->nullable();
            $table->text('images')->nullable();
            $table->bigInteger('categories_id')->unsigned()->nullable;
            $table->timestamps();
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
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
