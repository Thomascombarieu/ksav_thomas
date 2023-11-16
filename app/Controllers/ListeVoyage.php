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
}
