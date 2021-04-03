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
            $table->decimal('coin_amount', 10, 8);
            $table->decimal('price_per_coin', 10, 2);
            $table->string('currency');
            $table->decimal('currency_amount', 10, 2);
            $table->float('fee')->nullable();
            $table->string('comments')->nullable();
            $table->string('type');
            $table->string('transfer_type')->nullable();
            $table->datetime('transaction_date');
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
