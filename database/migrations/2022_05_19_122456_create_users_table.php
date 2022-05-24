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
            $table->string('username', 20)->unique();
            $table->string('password');
            $table->string('role')->nullable();
            $table->string('name', 30)->nullable();
            $table->string('surname', 30)->nullable();
            $table->string('genere', 1)->nullable();
            $table->date('data_nascita')->nullable();
            $table->string('citta', 30)->nullable();
            $table->string('provincia', 2)->nullable();
            $table->string('indirizzo', 40)->nullable();
            $table->text('image')->nullable();
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
