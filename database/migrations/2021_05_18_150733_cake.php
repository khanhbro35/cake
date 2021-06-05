<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cake extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cake', function (Blueprint $table) {
            $table->string('code_cake');
            $table->string('name');
            $table->float('price');
            $table->string('code_type');
            $table->string('img');
            $table->timestamps();
            $table->foreign('code_type')->references('code_type')->on('type');
            $table->primary('code_cake');
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
        Schema::dropIfExists('cake');
    }
}
