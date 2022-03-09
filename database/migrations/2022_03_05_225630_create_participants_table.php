<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();

            $table->boolean("chef")->default(false);

            $table->unsignedBigInteger('etudiant_id');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');

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
        Schema::dropIfExists('participants');
    }
}
