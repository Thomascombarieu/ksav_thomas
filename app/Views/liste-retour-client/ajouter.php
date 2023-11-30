<?php
    //debut de section
    $this->extend('layout');
    $this->section('contenu');


    //import du Form Helper
    helper('form');

    //Création du formulaire AjoutVoyage
    echo form_open(url_to('Ajout_Retour_Client'));
   
?>

<?php

    //données du voyage chargée

    echo form_label('Client ');
    $options = [
        //mettre foreach pour choix du client 
    ];

    echo form_dropdown('Client', $options,);



    //foreach des prestation
    // foreach($datas as $data){
    //     echo form_label($data['libelle'] );
    //     $data = [
    //     'name'      => $data['name'],
    //     'id'        => $data['id'],
    //     'placeholder' => 'note sur 3',
    //     'value'     => set_value('0'),
    //     'maxlength' => '2',
    //     'size'      => '10',
    //     'style'     => 'width:30%',
    // ];
    // echo form_input($data);

    //      }

    
    
    








    echo form_submit('Valider', 'ajouter');

    echo form_reset('Vider', 'reset'); 
    
    
    echo form_close();

    $this->endSection();

    ?>

