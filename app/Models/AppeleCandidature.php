<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppeleCandidature extends Model
{
    use HasFactory;

    protected $table = 'appel_candidatures';

    protected $primaryKey = 'identifiant';

    protected $fillable = [
        'date_de_debut',
        'date_de_fin',
        'biographie',
        'motivation',
        'niveau_etude',
    ];

    public function candidats()
    {
        return $this->belongsToMany(Candidat::class, 'candidat_appel_candidature', 'appel_candidature_identifiant', 'candidat_id');
    }
}
