<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    protected $table ="cours";

    protected $fillable = [
        'niveau', 'matiere', 'titre', 'commentaire', 'fichier',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ]; 

    public $timestamps = false;   
}
