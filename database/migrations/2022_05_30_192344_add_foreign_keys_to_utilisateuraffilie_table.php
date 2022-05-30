<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUtilisateuraffilieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utilisateuraffilie', function (Blueprint $table) {
            $table->foreign(['Utilisateur_id'], 'fk_UtilisateurAffilie_Utilisateur1')->references(['id'])->on('utilisateur')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utilisateuraffilie', function (Blueprint $table) {
            $table->dropForeign('fk_UtilisateurAffilie_Utilisateur1');
        });
    }
}
