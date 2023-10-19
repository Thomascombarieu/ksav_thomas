<?php

namespace App\Controllers;

class ListeClient extends BaseController
{
    public function index(): string
    {
        return view('liste-client');
    }
}