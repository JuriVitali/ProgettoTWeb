<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncludedServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('included_services', function (Blueprint $table) {
            $table->unsignedTinyInteger('servizio');
            $table->foreign('servizio')->references('id')->on('services');
            $table->unsignedBigInteger('alloggio');
            $table->foreign('alloggio')->references('id')->on('accomodations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('included_services');
    }
}
