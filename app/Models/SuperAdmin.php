<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class SuperAdmin extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'prenom', 'nom', 'image', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
