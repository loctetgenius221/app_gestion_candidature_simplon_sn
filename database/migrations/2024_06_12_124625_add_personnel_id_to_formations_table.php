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
        Schema::table('formations', function (Blueprint $table) {
            $table->foreignId('personnel_id')->constrained()->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('formations', function (Blueprint $table) {
            $table->dropForeign(['personnel_id']);
            $table->dropColumn('personnel_id');
        });

    }
};
