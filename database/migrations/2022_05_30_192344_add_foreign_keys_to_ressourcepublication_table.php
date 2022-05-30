<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRessourcepublicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ressourcepublication', function (Blueprint $table) {
            $table->foreign(['Publication_id'], 'fk_RessourcePublication_Publication1')->references(['id'])->on('publication')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ressourcepublication', function (Blueprint $table) {
            $table->dropForeign('fk_RessourcePublication_Publication1');
        });
    }
}
