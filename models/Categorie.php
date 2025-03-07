<?php
namespace App\Models;

use App\Models\CRUD;

class Categorie extends CRUD
{
    protected $table      = 'final_categorie';
    protected $primaryKey = 'id';
    protected $fillable   = ['nom'];

}
