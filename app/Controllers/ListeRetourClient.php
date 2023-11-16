<?php

namespace App\Controllers;

class ListeRetourClient extends BaseController
{
    public function index(): string
    {

        // récupérer la liste des clients en base -> $clients
        $retourClientModel = new \App\Models\RetourClient();
        $retourClients = $retourClientModel->findAll();

        return view('liste-retour-client', [
            'retourClients' => $retourClients // dans le code de la vue, il y aura une variable $clients
        ]);

        
    }

    public function ajouterForm(): string
    {
        return view('liste-voyage/ajouter');
    }

    public function modifierForm(): string
    {
        return view('liste-voyage/modifier');
    }
}
