<?php

namespace App\Models;
use App\Models\CRUD;

class Utilisateur extends CRUD{
    protected $table = 'categorie';
    protected $primaryKey = 'id';
    protected $fillable = ['nom'];
    
}