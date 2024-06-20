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

    public function candidat()
    {
        return $this->belongsTo(Candidat::class, 'candidature_id');
    }
    public function formation()
    {
        return $this->belongsTo(Formation::class, 'formation_id');
    }

}
