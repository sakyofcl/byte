<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship_addresses', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('oid')->unique();
            $table->string('street')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('zip')->nullable(false);
            $table->string('province')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ship_address');
    }
}
