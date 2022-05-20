<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true);
            $table->primary('id');
            $table->unsignedBigInteger('mittente')->index();
            $table->unsignedBigInteger('destinatario')->index();
            $table->boolean('letto');
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
        Schema::dropIfExists('messages');
    }
}
