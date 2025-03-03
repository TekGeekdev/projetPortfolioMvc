<?php

namespace App\Models;
use App\Models\CRUD;

class Utilisateur extends CRUD{
    protected $table = 'utilisateur';
    protected $primaryKey = 'id';
    protected $fillable = ['email', 'motDePasse', 'nomUtilisateur'];
    
}