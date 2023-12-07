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
        $clientModel = new \App\Models\Clients();
        $clients = $clientModel->findAll();

        $voyageModel = new \App\Models\Voyages();
        $voyages = $voyageModel->findAll();






        return view('liste-retour-client/ajouter',['clients' => $clients, 'voyages' => $voyages]);
    }


    //méthode pour l'ajout de retour client en base de donnée

    public function modifierForm(): string
    {





        return view('liste-retour-client/modifier');
    }
}
