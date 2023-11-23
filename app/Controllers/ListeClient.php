<?php

namespace App\Controllers;

use Config\View;
use PhpParser\Node\Expr\Cast\String_;

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
    public function ajouterClientForm(): String
    {
        return view('liste-client/ajouter');
    }

    public function ajouterClient():string
    {
        // récup paramtres post
        $data = $this->request->getVar();

        print('<pre>');
        print_r($data);
        print('</pre>');
        die(); 

        // insertion en base
        $clientModel = new \App\Models\Clients();

        $clientModel->insert([
            'NOM_CLIENT' => $data['nomClient'],
            'PRENOM_CLIENT' => $data['prenomClient'],
            'DATE_N_CLIENT' => $data['dateClient'],
            'MAIL_CLIENT' => $data['mailClient'],
            'TEL_CLIENT' => $data['telClient'],
            'ADRESSE_CLIENT' => $data['adresseClient']
            
            
        ]);
        

        // redirection vers... ?


    }
}
