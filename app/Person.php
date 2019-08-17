<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;

    protected $table = 'person';

    protected $fillable = ['name', 'typeDoc', 'numberDoc', 'profession', 'email', 'points'];

    public function scopePoints($query, $points){

        if ($points)
            $query->where('points', 'like', "%$points%");
    }
}
