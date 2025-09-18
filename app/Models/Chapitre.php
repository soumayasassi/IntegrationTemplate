<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class Chapitre extends Model
    {
        public function cours()
        {
            return $this->belongsTo(Cours::class);
        }

    protected $fillable = ['nom','cours_id'];
    use HasFactory;
}
