<?php

namespace App\Models;
use App\Models\CRUD;

class Commentaire extends CRUD{
    protected $table = 'article_has_categorie';
    protected $primaryKey = ['article_id','categorie_id' ];
}