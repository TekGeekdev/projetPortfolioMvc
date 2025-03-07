<?php
namespace App\Models;

use App\Models\CRUD;

class Utilisateur extends CRUD
{
    protected $table      = 'final_utilisateur';
    protected $primaryKey = 'id';
    protected $fillable   = ['email', 'motDePasse', 'nomUtilisateur', 'final_privilege_id'];

}
