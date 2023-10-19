<?php

namespace App\Controllers;

class ListeClients extends BaseController
{
    public function index(): string
    {
        return view('liste-clients');
    }
}