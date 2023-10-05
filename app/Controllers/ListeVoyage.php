<?php

namespace App\Controllers;

class ListeVoyage extends BaseController
{
    public function index(): string
    {
        return view('liste-voyage');
    }

    public function ajouter(): string
    {
        return view('liste-voyage/ajouter');
    }

    public function modifier(): string
    {
        return view('liste-voyage/modifier');
    }
}
