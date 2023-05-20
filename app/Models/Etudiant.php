<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Etudiant extends Model
{
    protected $table = 'etudiants';
    protected $primaryKey = 'idE';
    protected $fillable = ['name', 'firstname', 'email', 'password', 'adresse', 'user_type', 'idR'];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
