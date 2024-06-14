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
        Schema::table('appel_candidatures', function (Blueprint $table) {
            $table->dropColumn('niveau_etude');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appel_candidatures', function (Blueprint $table) {
            $table->enum('niveau_etude', ['Bfem', 'Baccalauréat', 'Licence 1', 'Licence 2', 'Licence 3', 'Master'])->nullable()->after('nom');
        });
    }
};
