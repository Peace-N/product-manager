<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->decimal('bid_amount',8,2);
            $table->decimal('bid_owner_email');
            $table->string('ip_adress');
            $table->longText('description');
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
        Schema::drop('products_transactions');
    }
}
