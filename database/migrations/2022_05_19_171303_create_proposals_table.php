<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true);
            $table->unsignedBigInteger('mittente');
            $table->foreign('mittente')->references('id')->on('users');
            $table->unsignedBigInteger('alloggio')->index();
            $table->foreign('alloggio')->references('id')->on('accommodations')->onDelete('cascade');
            $table->string('stato', 15);
            $table->text('testo');
            $table->date('data');
            $table->time('ora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposals');
    }
}
