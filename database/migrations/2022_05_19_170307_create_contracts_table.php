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
            $table->unsignedBigInteger('alloggio')->nullable();
            $table->unsignedBigInteger('locatore');
            $table->unsignedBigInteger('locatario');
            $table->date('data');
            $table->foreign('locatario')->references('id')->on('users');
            $table->foreign('locatore')->references('id')->on('users');
            $table->foreign('alloggio')->references('id')->on('accommodations')->onDelete('set null');
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
