<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'date_de_naissance',
        'lieu_de_naissance',
        'adresse',
        'email',
        'telephone',
        'image',
        'mot_de_passe',
        'cv',
    ];

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function appels()
    {
        return $this->belongsToMany(AppeleCandidature::class, 'candidat_appel_candidature');
    }

    public function formations()
    {
        return $this->belongsToMany(Formation::class, 'candidat_formation');
    }
}
