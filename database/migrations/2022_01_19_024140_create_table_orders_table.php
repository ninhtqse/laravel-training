<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary()->index()->comment('uuid gen auto in code');
            $table->uuid('customer_id')->index()->nullable();
            $table->uuid('user_id')->index()->nullable();
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('type')->nullable();
            $table->decimal('shipping_cost');
            $table->decimal('total_price');
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
        Schema::dropIfExists('orders');
    }
}
