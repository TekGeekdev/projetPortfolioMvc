<?php
namespace App\Models;

use App\Models\CRUD;

class Commentaire extends CRUD
{
    protected $table      = 'final_commentaire';
    protected $primaryKey = 'id';
    protected $fillable   = ['titre', 'contenu', 'datePublication', 'final_utilisateur_id', 'final_article_id'];
}

