<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->string('oid')->primary();
            $table->string('name')->nullable(false);
            $table->string('email')->nullable(false);
            $table->integer('phone')->nullable(false);
            $table->text('note')->nullable();
            $table->string('status')->nullable(false);
            $table->date('date')->nullable(false);
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
