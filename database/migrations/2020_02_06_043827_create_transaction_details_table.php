<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {

           // $table->engine = 'InnoDB'; //set the engine

            $table->increments('id');
            $table->unsignedInteger('transaction_id');
            $table->unsignedInteger('item_id');
            $table->unsignedInteger('quantity_id');
            $table->unsignedInteger('subtotal');
            $table->timestamps();

  
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');

            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');

            // $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_details');
    }
}
