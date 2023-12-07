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
        //model client +recup bdd
        $clientModel = new \App\Models\Clients();
        $clients = $clientModel->findAll();

        //model voyages + recup bdd
        $voyageModel = new \App\Models\Voyages();
        $voyages = $voyageModel->findAll();

        // model prestation + recup bdd



        //model prestation voyagev + recup bdd
        $prestationVoyageModel = new \App\Models\PrestationVoyage();
        $prestationVoyages = $prestationVoyageModel->findAll();



        return view('liste-retour-client/ajouter',['clients' => $clients, 'voyages' => $voyages]);
    }
        //méthode pour l'ajout de retour client en base de donnée

    public function ajouter():string
    {
        // récup paramtres post
        $data = $this->request->getVar();

        print('<pre>');
        print_r($data);
        print('</pre>');
        
        // insertion en base
        $retourclientModel = new \App\Models\RetourClient();
        
        $retourclientModel->insert([
            'NUM_RESERVATION' => $data['....'],
            'DATE_DEPART' => $data['...'],
            'VILLE_DEPART' => $data['...']
        ]);

        $lastID = $retourclientModel->getInsertID();
        var_dump($lastID);
       
        return'';

        // redirection vers... ?


    }

    






    public function modifierForm(): string
    {





        return view('liste-retour-client/modifier');
    }
}
