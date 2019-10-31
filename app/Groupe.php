<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    public function groupes()
    {
        return $this->belongsToMany(User::class);
    }
}
