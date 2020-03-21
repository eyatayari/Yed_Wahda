<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Relations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('autorisations', function (Blueprint $table) {

            $table->foreign('id_quarantaine')->references('id')->on('quarantaines');
            $table->foreign('id_autorite')->references('id')->on('autorites');
        });
        Schema::table('courses', function (Blueprint $table) {

            $table->foreign('id_quarantaine')->references('id')->on('quarantaines');
            $table->foreign('id_benevole')->references('id')->on('benevoles');
        });
        Schema::table('messages', function (Blueprint $table) {

            $table->foreign('id_quarantaine')->references('id')->on('quarantaines');
            $table->foreign('id_benevole')->references('id')->on('benevoles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
