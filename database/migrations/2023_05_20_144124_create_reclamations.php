<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('reclamations')) {
            Schema::create('reclamations', function (Blueprint $table) {
                $table->increments('idRC');
                $table->string('message', 50);
                $table->date('date');
                $table->unsignedInteger('idE');
                $table->unsignedInteger('idM');
                $table->unsignedInteger('idEN');
                $table->unsignedInteger('idR');
                $table->unsignedInteger('idP');

                $table->foreign('idE')->references('idE')->on('etudiants');
                $table->foreign('idM')->references('idM')->on('matieres');
                $table->foreign('idEN')->references('idEN')->on('enseignants');
                $table->foreign('idR')->references('idR')->on('responsables');
                $table->foreign('idP')->references('idP')->on('pvs');
            });
        }}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reclamations');
    }
}
