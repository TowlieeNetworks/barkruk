<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lease_id');
            $table->date('date');
            $table->string('bedrijfs_naam');
            $table->string('volledige_naam');
            $table->string('straatnaam');
            $table->integer('nummer');
            $table->string('postcode');
            $table->string('city');
            $table->timestamps();

            $table->foreign('lease_id')
                ->references('id')
                ->on('leases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
