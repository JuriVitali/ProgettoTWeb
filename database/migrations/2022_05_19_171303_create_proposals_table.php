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
            $table->primary('id');
            $table->unsignedBigInteger('mittente');
            $table->unsignedBigInteger('alloggio')->index();
            $table->string('stato', 15);
            $table->text('testo');
            $table->data('data');
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
