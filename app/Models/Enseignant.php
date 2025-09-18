<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{


    public function cours()
    {
        return $this->belongsToMany(Cours::class, 'cours_enseignant');
    }



   use HasFactory ;
    protected $fillable = ['nom'];
}
