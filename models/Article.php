<?php

namespace App\Models;
use App\Models\CRUD;

class Article extends CRUD{
    protected $table = 'article';
    protected $primaryKey = 'id';
    protected $fillable = ['titre', 'contenu', 'datePublication','utilisateur_id'];
    
}