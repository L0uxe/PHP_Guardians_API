<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('identite_secrete');
            $table->string('sexe');
            $table->string('couleur_cheveux');
            $table->unsignedBigInteger('planete_origine_id')->nullable();
            //$table->foreign('planete_origine_id')->references('id')->on('planets');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('vehicule_id')->nullable();
            //$table->foreign('vehicule_id')->references('id')->on('vehicles');
            $table->timestamps();
        });

        DB::table ('superheroes')->insert([
            'nom' => 'Superman',
            'identite_secrete' => 'Clark Kent',
            'sexe' => 'Homme',
            'couleur_cheveux' => 'Noir',
            'description' => 'Superman est un super-héros de bande dessinée américaine appartenant au monde imaginaire de l\'Univers DC. Ce personnage est considéré comme une icône culturelle américaine.',
        ]);




    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};
