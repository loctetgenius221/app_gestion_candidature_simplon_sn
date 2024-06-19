<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Personnel extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'prenom',
        'nom',
        'adresse',
        'e_mail',
        'telephone',
        'image',
        'mot_de_passe',
    ];

    protected $hidden = [
        'mot_de_passe',
    ];

    public function setMotDePasseAttribute($value)
    {
        $this->attributes['mot_de_passe'] = Hash::make($value);
    }

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }
}