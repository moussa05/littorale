<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publication', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('description', 45)->nullable();
            $table->dateTime('date')->nullable();
            $table->integer('actifYN')->nullable();
            $table->string('visibilite', 30);
            $table->integer('Utilisateur_id')->index('fk_Publication_Utilisateur_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publication');
    }
}
