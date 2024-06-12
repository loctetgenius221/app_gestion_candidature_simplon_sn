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
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->date('date_de_naissance');
            $table->string('lieu_de_naissance');
            $table->string('adresse');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('mot_de_passe');
            $table->text('cv');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidats');
    }
};
