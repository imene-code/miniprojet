<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('etudiants')) {
            Schema::create('etudiants', function (Blueprint $table) {
                $table->increments('idE');
                $table->string('name');
                $table->string('firstname');
                $table->string('email')->unique();
                $table->string('password');
                $table->string('adresse');
                $table->string('user_type');
                $table->unsignedInteger('idR');
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
        Schema::dropIfExists('etudiants');
    }
}
