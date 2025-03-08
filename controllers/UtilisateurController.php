<?php
namespace App\Controllers;

use App\Models\Utilisateur;
use App\Providers\Validator;
use App\Providers\View;
use App\Models\Privilege;

class UtilisateurController
{

    public function create()
    {   
        $privilege = new Privilege;
        $selectPrivilege = $privilege->select();
        return View::render('utilisateur/create', ['privileges' => $selectPrivilege]);
    }

    public function store($data = [])
    {
        $validator = new Validator;

        $validator->field('email', $data['email'])->required()->max(50)->email();
        $validator->field('motDePasse', $data['motDePasse'])->required()->min(5)->max(15);
        $validator->field('nomUtilisateur', $data['nomUtilisateur'])->required()->min(5)->max(15);
        // TODO: faire la validation pour le champ privilege

        if ($validator->isSuccess()) {
            $utilisateur = new Utilisateur;
            $insert      = $utilisateur->insert($data);
            if ($insert) {
                return view::redirect('utilisateur/show?id=' . $insert);
            } else {
                return View::render('error', ['msg' => 'impossible de saisir l\'utilisateur']);
            }
        } else {
            $errors = $validator->getErrors();
            return View::render('utilisateur/create', ['errors' => $errors, 'utilisateur' => $data]);
        }
    }

    public function show($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            $utilisateur = new Utilisateur;
            if ($selectId = $utilisateur->selectId($data['id'])) {
                return View::render('utilisateur/show', ['utilisateur' => $selectId]);
            } else {
                return View::render('error', ['msg' => 'L\'utilisateur n\'existe pas']);
            }

        }
        return View::render('error', ['msg' => 'Zone interdite, inscrivez-vous!']);
    }

    public function edit($data = [])
    {
        if (isset($data['id']) && $data['id'] != null) {
            $utilisateur = new Utilisateur;
            if ($selectId = $utilisateur->selectId($data['id'])) {
                return View::render('utilisateur/edit', ['utilisateur' => $selectId]);
            } else {
                return View::render('error', ['msg' => 'L\'utilisateur n\'existe pas']);
            }

        }
        return View::render('error', ['msg' => 'Zone interdite, inscrivez-vous!']);

    }

    public function update($data = [], $get = [])
    {
        $get = ! empty($get) ? $get : $_GET;

        if (isset($get['id']) && $get['id'] != null) {
            $validator = new Validator;

            $validator->field('email', $data['email'])->required()->max(50)->email();
            $validator->field('motDePasse', $data['motDePasse'])->required()->min(5)->max(15);

            if ($validator->isSuccess()) {
                $utilisateur = new Utilisateur;

                $update = $utilisateur->update($data, $get['id']);
                if ($update) {
                    return view::redirect('utilisateur/show?id=' . $get['id']);
                } else {
                    return View::render('error', ['msg' => 'Impossible d\'appliquer les modifications']);
                }
            } else {
                $errors = $validator->getErrors();
                return View::render('utilisateur/edit', ['errors' => $errors, 'utilisateur' => $data]);
            }
        }
    }

    public function delete($data = [])
    {
        $id          = $data['id'];
        $utilisateur = new Utilisateur;
        $delete      = $utilisateur->delete($id);
        if ($delete) {
            return view::redirect('utilisateur/create');
        } else {
            return View::render('error', ['msg' => 'Impossible de supprimer le compte']);
        }
    }
}
