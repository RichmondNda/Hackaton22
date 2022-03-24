<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repas', function (Blueprint $table) {
            $table->id();
            $table->string('libelle') ;
            $table->timestamps();
        });

        Schema::create('restaurations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('etudiant_id');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');

            $table->unsignedBigInteger('repa_id');
            $table->foreign('repa_id')->references('id')->on('repas')->onDelete('cascade');

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
        Schema::dropIfExists('repas');
        Schema::dropIfExists('restaurations');
    }
}
