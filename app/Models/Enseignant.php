<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Enseignant extends Model
{
    protected $table = 'enseignants';
    protected $primaryKey = 'idEN';
    protected $fillable = ['name', 'firstname', 'email', 'password', 'adresse', 'user_type', 'idR'];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
