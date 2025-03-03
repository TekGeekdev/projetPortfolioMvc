<?php
namespace App\Controllers;

use App\Models\Article;
use App\Models\Utilisateur;
use App\Providers\Date;
use App\Providers\Validator;
use App\Providers\View;

class ArticleController
{

    public function index()
    {
        $article     = new Article;
        $utilisateur = new Utilisateur;

        $articles = $article->select('datePublication', 'DESC');
        foreach ($articles as $key => $oneArticle) {
            $authorName                   = $utilisateur->selectId($oneArticle['utilisateur_id']);
            $articles[$key]['authorName'] = $authorName['nomUtilisateur'];
        }

        // echo('<pre>');
        // print_r($articles);
        // echo('</pre>');
        return View::render('article/index', ['articles' => $articles]);

    }

    public function create()
    {
        $get = ! empty($get) ? $get : $_GET;

        if (isset($get['id']) && $get['id'] != null) {
            $utilisateur = new Utilisateur;
            if ($selectId = $utilisateur->selectId($get['id'])) {
                return View::render('article/create', ['utilisateur' => $selectId]);
            } else {
                return View::render('error', ['msg' => 'L\'utilisateur n\'existe pas']);
            }

        } else {
            return View::render('error', ['msg' => 'Zone interdite, inscrivez-vous!']);
        }

    }

    public function store($data = [])
    {
        $validator = new Validator;

        $validator->field('titre', $data['titre'])->required()->max(50);
        $validator->field('contenu', $data['contenu'])->required();

        $get         = ! empty($get) ? $get : $_GET;
        $utilisateur = new Utilisateur;
        $selectId    = $utilisateur->selectId($get['id']);

        if ($validator->isSuccess()) {

            $get                     = ! empty($get) ? $get : $_GET;
            $date                    = new Date;
            $dateInsert              = $date->date();
            $data['utilisateur_id']  = $get['id'];
            $data['datePublication'] = $dateInsert;

            $article    = new Article;
            $insertData = $article->insert($data);
            if ($insertData) {
                return view::redirect('utilisateur/show?id=' . $get['id']);
            } else {
                return View::render('error', ['msg' => 'Impossible d\'envoyer l\'article']);
            }
        } else {
            $errors = $validator->getErrors();
            return View::render('article/create', ['errors' => $errors, 'article' => $data, 'utilisateur' => $selectId]);
        }
    }

    public function show()
    {

        $get = ! empty($get) ? $get : $_GET;

        if (isset($get['id']) && $get['id'] != null) {
            $article     = new Article;
            $utilisateur = new Utilisateur;
            if ($selectId = $utilisateur->selectId($get['id'])) {
                $articles = $article->selectAllById($get['id'], 'utilisateur_id', 'id', 'DESC');
                echo('<pre>');
                print_r($articles);
                echo('</pre>');
                return View::render('article/show', ['utilisateur' => $selectId, 'articles' => $articles]);
            } else {
                return View::render('error', ['msg' => 'L\'utilisateur n\'existe pas']);
            }

        } else {
            return View::render('error', ['msg' => 'Zone interdite, inscrivez-vous!']);
        }

    }

    public function edit($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            $article = new Article;
            if ($selectArticle = $article->selectId($data['id'])) {
                echo('<pre>');
                print_r($selectArticle);
                echo('</pre>');
                $utilisateur = new Utilisateur;
                $selectUser = $utilisateur->selectId($selectArticle['utilisateur_id']);
                return View::render('article/edit', ['article' => $selectArticle, 'utilisateur' => $selectUser]);
            } else {
                return View::render('error', ['msg' => 'L\'article n\'existe pas']);
            }

        }
        return View::render('error', ['msg' => 'Zone interdite, inscrivez-vous!']);

    }

    public function update($data){
        echo('<pre>');
        print_r($data);
        echo('</pre>');
    }

}
