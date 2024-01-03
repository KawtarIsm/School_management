<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'CIN',
        'Prenom',
        'Nom',
        'Date_Naissance',
        'Note_Bac2',
        'Email',
        'Tel',
    ];
}
