<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    // public $fillable = ['nom', 'prenom','matricule', 'age'];
    public $guarded = [];
}
