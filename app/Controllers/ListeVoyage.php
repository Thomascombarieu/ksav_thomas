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
        die(); 

        // insertion en base
        $voyageModel = new \App\Models\Voyages();
        
        $voyageModel->insert([
            'CODE_VOYAGE' => $data['codeVoyage'],
            'DESCRIPTION' => $data['descVoyage'],
            'TYPE_VOYAGE' => $data['typeVoyage'],
            'DESTINATION' => $data['destVoyage']
        ]);
        // foreach($data['prestation'] as $prestation){
            
        // }
        
        return'';
        // redirection vers... ?


    }
}
