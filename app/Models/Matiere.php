<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Enseignant;
class Matiere extends Model
{
    protected $table = 'matieres';
    protected $primaryKey = 'idM';
    public $timestamps = false;

    protected $fillable = [
        'nom',
        'description',
        'idEN',
    ];

    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class, 'idEN');
    }

    // Autres relations ou méthodes spécifiques au modèle Matiere
}
