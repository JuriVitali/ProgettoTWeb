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
            $table->unsignedBigInteger('alloggio');
            $table->foreign('alloggio')->references('id')->on('accommodations')->onDelete('cascade');
            $table->foreign('servizio')->references('id')->on('services');
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
