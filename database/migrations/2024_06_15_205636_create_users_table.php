<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('prenom');
                $table->string('nom');
                $table->date('date_de_naissance');
                $table->string('lieu_de_naissance');
                $table->string('adresse');
                $table->string('email')->unique();
                $table->string('telephone');
                $table->string('image')->nullable();
                $table->string('password');
                $table->string('cv')->nullable();
                $table->timestamps();
            });
        } else {
            Schema::table('users', function (Blueprint $table) {
                if (!Schema::hasColumn('users', 'prenom')) {
                    $table->string('prenom');
                }
                if (!Schema::hasColumn('users', 'nom')) {
                    $table->string('nom');
                }
                if (!Schema::hasColumn('users', 'date_de_naissance')) {
                    $table->date('date_de_naissance');
                }
                if (!Schema::hasColumn('users', 'lieu_de_naissance')) {
                    $table->string('lieu_de_naissance');
                }
                if (!Schema::hasColumn('users', 'adresse')) {
                    $table->string('adresse');
                }
                if (!Schema::hasColumn('users', 'email')) {
                    $table->string('email')->unique();
                }
                if (!Schema::hasColumn('users', 'telephone')) {
                    $table->string('telephone');
                }
                if (!Schema::hasColumn('users', 'image')) {
                    $table->string('image')->nullable();
                }
                if (!Schema::hasColumn('users', 'password')) {
                    $table->string('password');
                }
                if (!Schema::hasColumn('users', 'cv')) {
                    $table->string('cv')->nullable();
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
