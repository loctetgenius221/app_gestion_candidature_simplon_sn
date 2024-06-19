<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'prenom', 'nom', 'date_de_naissance', 'lieu_de_naissance',
        'adresse', 'email', 'telephone', 'image', 'password', 'cv'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}