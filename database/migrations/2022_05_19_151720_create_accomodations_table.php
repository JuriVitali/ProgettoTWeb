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
        Schema::create('accommodations', function (Blueprint $table) {
            $table->unsignedBigInteger('id', true);
            $table->unsignedBigInteger('proprietario')->index();
            $table->foreign('proprietario')->references('id')->on('users');
            $table->string('titolo_annuncio', 60);
            $table->string('tipologia', 15);
            $table->date('inizio_disponibilita');
            $table->date('fine_disponibilita');
            $table->date('data_inserimento');
            $table->text('descrizione');
            $table->unsignedSmallInteger('canone_affitto');
            $table->string('citta', 30);
            $table->string('provincia', 2);
            $table->string('indirizzo', 40);
            $table->unsignedSmallInteger('superficie');
            $table->unsignedTinyInteger('n_camere')->nullable();
            $table->boolean('locale_ricreativo')->default(false)->nullable();
            $table->boolean('cucina')->default(false)->nullable();
            $table->unsignedTinyInteger('posti_tot')->nullable();
            $table->unsignedTinyInteger('letti_stanza')->nullable();
            $table->boolean('angolo_studio')->default(false)->nullable();
            $table->char('genere_locatario')->nullable();
            $table->unsignedTinyInteger('eta_min_locatario')->nullable();
            $table->unsignedTinyInteger('eta_max_locatario')->nullable();
            $table->date('data_locazione')->nullable()->default(null);
            $table->text('foto')->default('images/accommodations/default.jpg');
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
