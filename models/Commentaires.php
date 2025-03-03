<?php

namespace App\Models;
use App\Models\CRUD;

class Commentaire extends CRUD{
    protected $table = 'commentaire';
    protected $primaryKey = 'id';
    protected $fillable = ['titre', 'contenu', 'datePublication','utilisateur_id'];
    
}