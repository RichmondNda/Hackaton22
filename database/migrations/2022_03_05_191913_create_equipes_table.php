<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('logo')->nullable();

            $table->boolean('statut')->default(false);
            
            $table->unsignedBigInteger('niveau_id');
            $table->foreign('niveau_id')->references('id')->on('niveaux')->onDelete('cascade');

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
        Schema::dropIfExists('equipes');
    }
}
