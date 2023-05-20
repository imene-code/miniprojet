<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponsables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('responsables')) {
            Schema::create('responsables', function (Blueprint $table) {
                $table->increments('idR');
                $table->string('name');
                $table->string('firstname');
                $table->string('email')->unique();
                $table->string('password');
                $table->string('adresse');
                $table->string('user_type');
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
        Schema::dropIfExists('responsables');
    }
}
