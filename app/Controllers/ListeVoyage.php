<?php

namespace App\Controllers;


class ListeVoyage extends BaseController
{
    public function index(): string
    {

        // récupérer la liste des clients en base -> $clients
        $voyageModel = new \App\Models\Voyages();
        $voyages = $voyageModel->findAll();

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
        return view('liste-voyage/modifier');
    }
    public function ajouter():string
    {
        // récup paramtres post
        $data = $this->request->getVar();

        print('<pre>');
        print_r($data);
        print('</pre>');
        
        // insertion en base
        $voyageModel = new \App\Models\Voyages();
        
        $voyageModel->insert([
            'code_voyage' => $data['codeVoyage'],
            'description' => $data['descVoyage'],
            'type_voyage' => $data['typeVoyage'],
            'destination' => $data['destVoyage']
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
