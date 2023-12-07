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

