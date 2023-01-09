<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Projet extends Model
{
    use HasFactory;

    public function Phase(): HasMany
    {
        return $this->hasMany('App\Models\Phase', 'id_phase', 'id');
    }

   

}
