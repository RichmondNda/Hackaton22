<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepSallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rep_salles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('salle_id');
            $table->foreign('salle_id')->references('id')->on('salles')->onDelete('cascade');

            $table->unsignedBigInteger('equipe_id');
            $table->foreign('equipe_id')->references('id')->on('equipes')->onDelete('cascade');

            $table->unsignedBigInteger('hackaton_id');
            $table->foreign('hackaton_id')->references('id')->on('hackatons')->onDelete('cascade');
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
        Schema::dropIfExists('rep_salles');
    }
}
