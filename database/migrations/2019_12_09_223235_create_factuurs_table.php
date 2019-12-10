<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactuursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factuurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('supply_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('amount');
            $table->timestamps();

            $table->foreign('supply_id')
                ->references('id')
                ->on('supplies');

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factuurs');
    }
}
