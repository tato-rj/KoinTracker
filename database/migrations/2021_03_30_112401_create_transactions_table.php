<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('portfolio_id');
            $table->string('coin');
            $table->unsignedInteger('coin_amount');
            $table->unsignedInteger('price_per_coin');
            $table->string('currency');
            $table->unsignedInteger('currency_amount');
            $table->string('fee')->nullable();
            $table->string('comments');
            $table->string('type');
            $table->string('transfer_type')->nullable();
            $table->date('transaction_date');
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
        Schema::dropIfExists('transactions');
    }
}
