<?php

namespace App\Controllers;

class ListeClient extends BaseController
{
    public function index()
    {

        // récupérer la liste des clients en base -> $clients
        $clientModel = new \App\Models\Clients();
        $clients = $clientModel->findAll();


        // // envoyer les clients à la vue (comme avec etudiants)

        return view('liste-client', [
            'clients' => $clients // dans le code de la vue, il y aura une variable $clients
        ]);
    }
}
