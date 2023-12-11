<?php

namespace App\Controllers;

use App\Models\Prestation;

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
        $prestationModel = new \App\Models\Prestation();
        $prestations = $prestationModel->findAll();

        //model prestation voyagev + recup bdd
        $prestationVoyageModel = new \App\Models\PrestationVoyage();
        $prestationVoyages = $prestationVoyageModel->findAll();



        return view('liste-retour-client/ajouter',['clients' => $clients, 'voyages' => $voyages, 'prestations' => $prestations, 'prestationVoyages' => $prestationVoyages]);
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
            'ID_VOYAGE' => $data['voyage'],
            'ID_CLIENT' => $data['client'],
            'NUM_RESERVATION' => $data['numreservation'],
            'DATE_DEPART' => $data['dateDepart'],
            'VILLE_DEPART' => $data['villeDepart']
        ]);

        $lastID = $retourclientModel->getInsertID();
        var_dump($lastID);
        
        $satisfactionModel = new \App\Models\Satisfaction();
        $satisfactionModel->insert([
            'ID_RETOUR_CLIENT' => $lastID
        ]);

        // foreach($data['notePresta'] as $prestation){
        //     if (!empty($prestation)){
        //         $satisfactionModel->insert([
        //             'id_retour_client' => $lastID,
        //             'id_prestation' => $prestation,
        //             'satisfaction_prestation_client' => $prestation]);

        //     } 
            

        // }

        return'';

        // redirection vers... ?


    }

    






    public function modifierForm(): string
    {





        return view('liste-retour-client/modifier');
    }
}
