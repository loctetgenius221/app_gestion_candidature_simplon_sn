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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('adresse');
            $table->string('e_mail')->unique();
            $table->string('image')->nullable();
            $table->string('telephone');
            $table->string('mot_de_passe');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('personnels');
    }
    
};
