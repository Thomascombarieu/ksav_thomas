<?php

namespace App\Controllers;


class ListeVoyage extends BaseController
{
    public function index(): string
    {

        // récupérer la liste des clients en base -> $clients
        $voyageModel = new \App\Models\Voyages();
        $voyages = $voyageModel->findAll();

        // print('<pre>');
        // print_r($voyages);
        // print('</pre>');

        return view('liste-voyage', [
            'voyages' => $voyages // dans le code de la vue, il y aura une variable $clients
        ]);

        
    }

    public function ajouterForm(): string
    {
        return view('liste-voyage/ajouter');
    }
    // public function ajouter(): string
    // {
    //     return view('Ajout_Voyage');
    // }

    public function modifierForm(): string
    {
        // recup id
        $id_Voyage= $this ->request->getVar("id");
        

        // recup données voyage+prestation à partir du modèle 

        // recup table prestation => slect simple (get())

        $data = [
            //...données du voyage...
            'prestations' => [
                // ...?
            ]
        ];

        return view('liste-voyage/modifier', $data); // fournir les données récupérées (en 2ème parametre) 
    }
    public function ajouter():string
    {
        // récup paramtres post
        $data = $this->request->getVar();

        // print('<pre>');
        // print_r($data);
        // print('</pre>');
        
        // insertion en base
        $voyageModel = new \App\Models\Voyages();
        
        $voyageModel->insert([
            'CODE_VOYAGE' => $data['codeVoyage'],
            'DESCRIPTION' => $data['descVoyage'],
            'TYPE_VOYAGE' => $data['typeVoyage'],
            'DESTINATION' => $data['destVoyage']
        ]);

        $lastID = $voyageModel->getInsertID();
        var_dump($lastID);

        $prestationVoyageModel = new \App\Models\PrestationVoyage();
        // $prestationVoyageModel->insert([
        //     'id_voyage' => $lastID
        // ]);

        // foreach($data['prestation'] as $prestation){
        //     $prestationVoyageModel->insert([
        //         'id_voyage' => $lastID,
        //         'id_prestation' => $prestation 
        //     ]);

        // }
        return'';

        // redirection vers... ?


    }
}
