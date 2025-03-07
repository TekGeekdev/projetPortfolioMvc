<?php
namespace App\Models;

use App\Models\CRUD;

class Commentaire extends CRUD
{
    protected $table      = 'final_article_has_final_categorie';
    protected $primaryKey = ['final_article_id', 'final_categorie_id'];
}
