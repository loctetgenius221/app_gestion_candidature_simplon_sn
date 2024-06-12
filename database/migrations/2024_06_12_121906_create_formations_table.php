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
        
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->text('debouches');
            $table->date('date_de_debut');
            $table->date('date_de_fin');
            $table->string('statut');
            $table->text('critere_de_validation');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formations');
    }
};
