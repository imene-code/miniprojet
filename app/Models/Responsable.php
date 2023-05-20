<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Responsable extends Model
{
    protected $table = 'responsables';
    protected $primaryKey = 'idR';
    protected $fillable = ['name', 'firstname', 'email', 'password', 'adresse', 'user_type', 'idR'];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}

