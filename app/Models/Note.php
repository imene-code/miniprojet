<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Etudiant;
use App\Models\Enseignant;
use App\Models\Matiere;
class Note extends Model
{
    protected $table = 'notes';
    protected $primaryKey = 'idN';
    public $timestamps = false;

    protected $fillable = [
        'note',
        'idE',
        'idEN',
        'idM',
    ];

    // Relations avec d'autres modèles si nécessaire

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'idE');
    }

    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class, 'idEN');
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class, 'idM');
    }
}
