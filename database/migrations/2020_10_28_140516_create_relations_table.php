<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('universite_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('ecole_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('faculte_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('filiere_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('niveau_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('matiere_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('professeur_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('cours_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('td_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('code_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('livre_id')->nullable()->constrained()->cascadeOnDelete();

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
        Schema::dropIfExists('relations');
    }
}
