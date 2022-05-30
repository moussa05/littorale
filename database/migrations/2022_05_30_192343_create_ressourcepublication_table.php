<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRessourcepublicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ressourcepublication', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('chemin', 100)->nullable();
            $table->string('type', 45)->nullable();
            $table->integer('Publication_id')->index('fk_RessourcePublication_Publication1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ressourcepublication');
    }
}
