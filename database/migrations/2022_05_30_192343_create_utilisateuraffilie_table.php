<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateuraffilieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateuraffilie', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('publicYN')->nullable();
            $table->integer('nomInstitution')->nullable();
            $table->string('poste', 100)->nullable();
            $table->integer('Utilisateur_id')->index('fk_UtilisateurAffilie_Utilisateur1_idx');

            $table->primary(['id', 'Utilisateur_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateuraffilie');
    }
}
