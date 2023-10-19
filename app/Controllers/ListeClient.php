<?php

namespace App\Controllers;

class ListeClient extends BaseController
{
    public function index(): string
    {

        // récupérer la liste des clients en base -> $clients
        $clientModel = new \App\Models\Clients();
        $clients = $clientModel->findAll();

        // vérifier le contenu de $clients
        var_dump($clients);
        
        // // envoyer les clients à la vue (comme avec etudiants)
        // return view('liste-client', [
        //     'client' => $client
        // ]);
    }
}