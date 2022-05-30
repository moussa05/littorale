<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nom', 45);
            $table->string('prenom', 45);
            $table->date('ddn')->nullable();
            $table->string('email', 45)->nullable()->unique('Utilisateurcol_UNIQUE');
            $table->string('tel', 45)->nullable()->unique('tel_UNIQUE');
            $table->string('mdp', 256)->nullable();
            $table->integer('actifYN');
            $table->dateTime('created_time')->nullable();
            $table->integer('GroupeUtilisateur_id')->index('fk_Utilisateur_GroupeUtilisateur1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateur');
    }
}
