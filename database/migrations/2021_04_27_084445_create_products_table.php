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
            $table->integer('pid')->autoIncrement();
            $table->string('name')->nullable(false);
            $table->integer('stock')->nullable(true);
            $table->integer('price')->nullable(false);
            $table->string('brand')->nullable(true);
            $table->string('model')->nullable(true);
            $table->string('pcode');
            $table->text('description');
            $table->string('height')->nullable(true);
            $table->string('weight')->nullable(true);
            $table->integer('catid');
            $table->integer('subid')->nullable(true);
            $table->text('videourl')->nullable(true);
            $table->string('image');
            $table->timestamp('created_at');
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