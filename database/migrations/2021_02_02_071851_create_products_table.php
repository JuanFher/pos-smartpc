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
            $table->string('code');
            $table->string('name');
            $table->integer('stock');
            $table->string('image')->nullable();
            $table->decimal('buy_price',10 ,2);
            $table->decimal('sell_price', 10, 2);
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE'); 
            $table->foreignId('category_id')->constrained();
            $table->foreignId('provider_id')->constrained();
            $table->foreignId('tax_id')->constrained();
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
