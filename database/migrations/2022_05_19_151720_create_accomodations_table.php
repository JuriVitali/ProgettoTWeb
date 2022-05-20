<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccomodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accomodations', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true);
            $table->unsignedBigInteger('proprietario')->index();
            $table->foreign('proprietario')->references('id')->on('users');
            $table->string('titolo_annuncio', 30);
            $table->string('tipologia', 15);
            $table->date('inizio_disponibilita');
            $table->date('fine_disponibilita');
            $table->date('data_inserimento');
            $table->text('descrizione');
            $table->unsignedSmallInteger('canone_affitto');
            $table->string('citta', 30);
            $table->string('provincia', 2);
            $table->string('indirizzo', 40);
            $table->unsignedSmallInteger('superficie_tot');
            $table->unsignedTinyInteger('posti_letto')->nullable();
            $table->unsignedTinyInteger('n_camere')->nullable();
            $table->boolean('locale_ricreativo')->default(false)->nullable();
            $table->boolean('cucina')->default(false)->nullable();
            $table->unsignedTinyInteger('posti_tot')->nullable();
            $table->unsignedTinyInteger('posti_per_stanza')->nullable();
            $table->boolean('angolo_studio')->default(false)->nullable();
            $table->unsignedTinyInteger('superficie_camera')->nullable();
            $table->char('genere_locatario')->nullable();
            $table->unsignedTinyInteger('eta_min_locatario')->nullable();
            $table->unsignedTinyInteger('eta_max_locatario')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accomodations');
    }
}