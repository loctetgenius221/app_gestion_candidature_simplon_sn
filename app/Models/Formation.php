<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'description',
        'debouches',
        'date_de_debut',
        'date_de_fin',
        'statut',
        'critere_de_validation',
        'personnel_id',
    ];

    public function personnel()
    {
        return $this->belongsTo(Personnel::class);
    }

    public function candidats()
    {
        return $this->belongsToMany(Candidat::class, 'candidat_formation');
    }
}
