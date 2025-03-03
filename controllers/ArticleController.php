<?php
namespace App\Controllers;

use App\Models\Utilisateur;
use App\Models\Article;
use App\Providers\Validator;
use App\Providers\View;

class ArticleController
{
    public function create(){
        $get = ! empty($get) ? $get : $_GET;
        
        if (isset($get['id']) && $get['id'] != null){
            $utilisateur = new Utilisateur;
            if ($selectId = $utilisateur->selectId($get['id'])) {
                return View::render('article/create', ['utilisateur' => $selectId]);
            } else {
                return View::render('error', ['msg' => 'L\'utilisateur n\'existe pas']);
            }

        }else{
            return View::render('error', ['msg' => 'Zone interdite, inscrivez-vous!']);
        }
        
    }

    public function store($data = [])
    {
        
    
    }

}