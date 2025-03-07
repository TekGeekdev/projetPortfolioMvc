<?php
namespace App\Models;

use App\Models\CRUD;

class Privilege extends CRUD
{
    protected $table      = 'final_privilege';
    protected $primaryKey = 'id';
}
