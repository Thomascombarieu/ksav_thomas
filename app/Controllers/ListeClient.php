<?php

namespace App\Controllers;

class ListeClient extends BaseController
{
    public function index(): string
    {

        // récupérer la liste des clients en base -> $clients
        $delmeModel = new \App\Models\Delme();
        $etudiants = $delmeModel->findAll();

        // vérifier le contenu de $clients
        var_dump($etudiants);
        
        // envoyer les clients à la vue (comme avec etudiants)
        return view('liste-client', [
            'etudiants' => $etudiants
        ]);
    }
}