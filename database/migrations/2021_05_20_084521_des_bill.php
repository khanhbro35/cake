<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DesBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('des_bill', function (Blueprint $table) {
            $table->foreignId('bill_id');
            $table->string('code_cake');
            $table->integer('sl');
            $table->float('total');
            $table->primary(['bill_id','code_cake']);
            $table->foreign('code_cake')->references('code_cake')->on('cake');
            $table->foreign('bill_id')->references('bill_id')->on('bill');
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
        //
    }
}
