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
        Schema::create('appel_candidatures', function (Blueprint $table) {
            $table->id('identifiant');
            $table->date('date_de_debut');
            $table->date('date_de_fin');
            $table->text('biographie');
            $table->text('motivation');
            $table->string('niveau_etude');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('appel_candidatures');
    }
};
