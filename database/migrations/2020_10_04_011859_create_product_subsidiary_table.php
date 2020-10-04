<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSubsidiaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_subsidiary', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('product')->unsigned();
            $table->integer('subsidiary')->unsigned();
            $table->foreign('product')->references('id')->on('product')->onDelete('cascade');
            $table->foreign('subsidiary')->references('id')->on('subsidiary')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_subsidiary');
    }
}
