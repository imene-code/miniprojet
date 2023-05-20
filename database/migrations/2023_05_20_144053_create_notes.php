<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('notes')) {
            Schema::create('notes', function (Blueprint $table) {
                $table->increments('idN');
                $table->integer('note');
                $table->unsignedInteger('idE');
                $table->unsignedInteger('idEN');
                $table->unsignedInteger('idM');
                $table->foreign('idE')->references('idE')->on('etudiants');
                $table->foreign('idEN')->references('idEN')->on('enseignants');
                $table->foreign('idM')->references('idM')->on('matieres');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
