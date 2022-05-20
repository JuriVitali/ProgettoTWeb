<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true);
            $table->primary('id');
            $table->unsignedBigInteger('alloggio');
            $table->foreign('alloggio')->references('id')->on('accomodations')->onDelete('set null');
            $table->unsignedBigInteger('locatore');
            $table->foreign('locatore')->references('id')->on('users');
            $table->unsignedBigInteger('locatario');
            $table->foreign('locatario')->references('id')->on('users');
            $table->data('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
