<?php
namespace App\Models;

use App\Models\CRUD;

class Article extends CRUD
{
    protected $table      = 'final_article';
    protected $primaryKey = 'id';
    protected $fillable   = ['titre', 'contenu', 'datePublication', 'final_utilisateur_id', 'image'];
}
