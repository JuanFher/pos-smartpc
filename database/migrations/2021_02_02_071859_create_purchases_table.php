<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->enum('type', ['FACTURA', 'RECIBO'])->default('FACTURA');
            $table->string('fact_number');
            $table->date('purchase_date');
            $table->decimal('total_purchase', 10, 2);
            $table->string('image')->nullable();
            $table->enum('status', ['PAGADO', 'PENDIENTE'])->default('PENDIENTE');
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
        Schema::dropIfExists('purchases');
    }
}
