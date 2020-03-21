<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuarantainesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quarantaines', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('cin');
            $table->string('nom');
            $table->string('prenom');
            $table->string('ville');
            $table->date('date_naissance');
            $table->string('sexe');
            $table->string('num_tel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quarantaines');
    }
}
