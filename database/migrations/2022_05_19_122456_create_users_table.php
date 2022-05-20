<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true);
            $table->primary('id');
            $table->string('username', 20);
            $table->string('password', 16);
            $table->string('ruolo', 10);
            $table->string('nome', 30)->nullable();
            $table->string('cognome', 30)->nullable();
            $table->char('genere')->nullable();
            $table->date('data_nascita')->nullable();
            $table->string('citta', 30)->nullable();
            $table->string('provincia', 2)->nullable();
            $table->string('indirizzo', 40)->nullable();
            $table->string('foto')->default('default_user.png');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
