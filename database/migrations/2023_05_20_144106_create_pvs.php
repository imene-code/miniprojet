<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('pvs')) {
            Schema::create('pvs', function (Blueprint $table) {
                $table->increments('idP');
                $table->string('mention', 50);
                $table->string('status', 50);
                $table->date('date');
                $table->unsignedInteger('idE');
                $table->unsignedInteger('idR');
                $table->foreign('idE')->references('idE')->on('etudiants');
                $table->foreign('idR')->references('idR')->on('responsables');
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
        Schema::dropIfExists('pvs');
    }
}
