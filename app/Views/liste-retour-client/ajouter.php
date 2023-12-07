<?php
    //debut de section

use App\Models\Prestation;

    $this->extend('layout');
    $this->section('contenu');


    //import du Form Helper
    helper('form');

    //Création du formulaire AjoutVoyage
    echo form_open(url_to('Ajout_Retour_Client'));
   
?>

<?php

$listeClients= array();
$listeVoyages= array();

foreach($clients as $client){
    $nomclient= $client['ID_CLIENT'].' '.$client['NOM_CLIENT'].' '.$client['PRENOM_CLIENT'];

    

    array_push($listeClients, $nomclient);
}

foreach($voyages as $voyage){
    $nomVoyage= $voyage['ID_VOYAGE'].' '.$voyage['CODE_VOYAGE'].' '.$voyage['DESCRIPTION'];

    

    array_push($listeVoyages, $nomVoyage);
}


var_dump($listeClients);
var_dump($listeVoyages);


    //données du voyage chargée

    ?>
    <select name="client">
        <?php
        foreach($listeClients as $listeclient){
            echo "<option value=$client[ID_CLIENT]>$listeclient</option>";
        }

        ?>

    </select>
    <select name="voyage">
        <?php
        foreach($listeVoyages as $listeVoyage){
            echo "<option value=$voyage[ID_VOYAGE]>$listeVoyage</option>";
        }
        ?>
    </select>
    <?php
        echo form_label('N° réservation ');
        $numreservationForm = [
            'name'      => 'numreservation',
            'id'        => 'numreservation',
            'placeholder' => 'Entrez le numero de reservation du voyage',
            //'value'     => set_value('johndoe'),
            //'maxlength' => '100',
            'size'      => '50',
            'style'     => 'width:30%',
        ];
        echo form_input($numreservationForm);

        echo form_label('Date de départ ');
    $dateDepartForm = [
        'type'      => 'date',
        'name'      => 'dateDepart',
        'id'        => 'dateDepart',
        'placeholder' => 'Entrez la date de départ du Client',
        //'value'     => set_value('johndoe'),
        //'maxlength' => '100',
        'size'      => '50',
        'style'     => 'width:30%',
    ];
    echo form_input($dateDepartForm);

        echo form_label('Ville de départ ');
    $villeDepartForm = [
        'name'      => 'villeDepart',
        'id'        => 'villeDepart',
        'placeholder' => 'Entrez la ville de départ',
        //'value'     => set_value('johndoe'),
        //'maxlength' => '100',
        'size'      => '50',
        'style'     => 'width:30%',
    ];
    echo form_input($villeDepartForm);


    //foreach des prestation
    foreach($prestations as $prestation){
        echo form_label($prestation['LIBELLE_PRESTATION'] );
        $data = [
        'name'      => 'notePresta[]',
        // 'id'        => $prestation['ID_PRESTATION'],
        'placeholder' => 'note sur 3',
        'value'     => $prestation['ID_PRESTATION'],
        'maxlength' => '2',
        'size'      => '5',
        'style'     => 'width:30%',
    ];
    echo form_input($prestation['LIBELLE_PRESTATION']);

         }
    
    
    








    echo form_submit('Valider', 'ajouter');

    echo form_reset('Vider', 'reset'); 
    
    
    echo form_close();

    $this->endSection();

    ?>

