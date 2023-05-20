<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatieres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('matieres')) {
            Schema::create('matieres', function (Blueprint $table) {
                $table->increments('idM');
                $table->string('nom', 50);
                $table->string('description', 100);
                $table->unsignedInteger('idEN');

                $table->foreign('idEN')->references('idEN')->on('enseignants');
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
        Schema::dropIfExists('matieres');
    }
}
