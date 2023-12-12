<?php

$this->extend('layout');
$this->section('contenu');


//import du Form Helper
helper('form');

//Création du formulaire AjoutVoyage
echo form_open(url_to('Ajout_Retour_Client'));



//foreach des prestation
// foreach($prestations as $prestation){
//     echo form_label($prestation['LIBELLE_PRESTATION'] );
//     $prestation['ID_PRESTATION'] = [
//     'name'      => 'notePresta[]',
//     'id'        => $prestation['ID_PRESTATION'],
//     // 'placeholder' => 'note sur 3',
//     // 'value'     => $prestation['ID_PRESTATION'],
//     // 'maxlength' => '2',
//     // 'size'      => '5',
//     'style'     => 'width:20%',
// ];
// echo form_input($prestation['ID_PRESTATION']);

//     }
