<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coins', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->string('short');
            $table->string('name');
            $table->json('latest_market')->nullable();
            $table->json('latest_1h_range')->nullable();
            $table->json('latest_24h_range')->nullable();
            $table->json('latest_7d_range')->nullable();
            $table->json('latest_30d_range')->nullable();
            $table->json('latest_1y_range')->nullable();
            $table->json('latest_all_range')->nullable();
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
        Schema::dropIfExists('coins');
    }
}
