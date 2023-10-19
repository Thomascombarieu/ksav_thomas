<?php
    //debut de section
    $this->extend('layout');
    $this->section('contenu');
    //import du Form Helper
    helper('form');
    //Création du formulaire AjoutVoyage
    echo form_open(url_to('Ajout_Client'));
    echo form_reset('Vider', 'reset');

    // Input pour le nom du client

    echo form_label('Nom du client ');
    $nomClientForm = [
        'name'      => 'nomClient',
        'id'        => 'nomClient',
        'placeholder' => 'Entrez le nom du Client',
        //'value'     => set_value('johndoe'),
        //'maxlength' => '100',
        'size'      => '50',
        'style'     => 'width:30%',
    ];
    echo form_input($nomClientForm);

    // prénom du client

    echo form_label('Prénom du client ');
    $prenomClientForm = [
        'name'      => 'prenomClient',
        'id'        => 'prenomClient',
        'placeholder' => 'Entrez le prénom du Client',
        //'value'     => set_value('johndoe'),
        //'maxlength' => '100',
        'size'      => '50',
        'style'     => 'width:30%',
    ];
    echo form_input($prenomClientForm);

    //input select pour type Voyage

    echo form_label('Sexe du client');
    $options = [
        'homme'  => 'Homme',
        'femme'    => 'Femme',
        'undefined'  => 'Ne pas définir',
    ];

    echo form_dropdown('sexe-client', $options,);

    //input destination voyage

    echo form_submit('Valider', 'ajouter');

    echo form_close();

    $this->endSection();

    ?>