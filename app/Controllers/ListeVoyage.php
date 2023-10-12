<?php

namespace App\Controllers;

class ListeVoyage extends BaseController
{
    public function index(): string
    {
        return view('liste-voyage');
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
