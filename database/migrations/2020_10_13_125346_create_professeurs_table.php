<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professeurs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->text('description');
            $table->timestamps();
        });
        Schema::create('matiere_professeur', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('matiere_id')->references('id')->on('matieres')->onDelete('cascade');
            $table->foreignId('professeur_id')->references('id')->on('professeurs')->onDelete('cascade');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professeurs');
    }
}
