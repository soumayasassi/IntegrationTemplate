<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class Cours extends Model
    {



        public function enseignants()
        {
            return $this->belongsToMany(Enseignant::class, 'cours_enseignant');
        }



    public function chapitres()
    {
        return $this->hasMany(Chapitre::class);
    }


    protected $fillable = ['titre', 'description', 'duree'];
    // ou protected $guarded = []; pour tout autoriser


    /** @use HasFactory<\database\CoursFactory> */
    use HasFactory;

}
