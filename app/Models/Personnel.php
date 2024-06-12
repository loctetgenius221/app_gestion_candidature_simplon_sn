<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable = [
        'prenom',
        'nom',
        'adresse',
        'e_mail',
        'telephone',
        'image',
        'mot_de_passe',
    ];

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

}
