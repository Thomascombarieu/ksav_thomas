<?php
    //debut de section
    $this->extend('layout');
    $this->section('contenu');


    //import du Form Helper
    helper('form');

    //Création du formulaire AjoutVoyage
    echo form_open(url_to('Ajout_Voyage'));
   
?>
<fieldset>
<?php
    // Input pour le nom du voyage

    echo form_label('Code Voyage ');
    $nomVoyageForm = [
        'name'      => 'codeVoyage',
        'id'        => 'codeVoyage',
        'placeholder' => 'Entrez le nom du voyage',
        //'value'     => set_value('johndoe'),
        //'maxlength' => '100',
        'size'      => '50',
        'style'     => 'width:30%',
    ];
    echo form_input($nomVoyageForm);

    //input textarea pour la description voyage

    echo form_label('Description du voyage ');
    $descVoyageForm = [
        'name'      => 'descVoyage',
        'id'        => 'descVoyage',
        'placeholder' => 'Entrez la description du voyage',
        //'value'     => set_value('johndoe'),
        //'maxlength' => '100',
        'size'      => '50',
        'style'     => 'width:30%',
    ];
    echo form_textarea($descVoyageForm);

    //input select pour type Voyage

    echo form_label('Type de voyage ');
    $options = [
        'vide'  => '...',
        'circuit'  => 'Circuit',
        'croisiere'    => 'Croisière',
        'sejour'  => 'Séjour',
        'vol' => 'Vol',
    ];
?>
</fieldset>
<?php
    echo form_dropdown('typeVoyage', $options,);

    //input destination voyage

    echo form_label('Destination du voyage');
    $destinationVoyageForm = [
        'name'      => 'destVoyage',
        'id'        => 'destVoyage',
        'placeholder' => 'Entrez la destination du voyage',
        //'value'     => set_value('johndoe'),
        //'maxlength' => '100',
        'size'      => '50',
        'style'     => 'width:30%',
    ];
    echo form_input($destinationVoyageForm);

    //checkbox pour les prestations (il y en a plusieurs)
    echo form_label('Transfert');
    $transfertForm = [
        'name'    => 'prestation[]',
        // 'id'      => 'prestation',
        'value'   => 'Transfert',
        //'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($transfertForm);

    //hotel
    echo form_label('Hôtel');
    $hotelForm = [
        'name'    => 'prestation[]',
        // 'id'      => 'prestation',
        'value'   => 'Hotel',
        //'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($hotelForm);

    //Restauration
    echo form_label('Restauration');
    $restaurationForm = [
        'name'    => 'prestation[]',
        // 'id'      => 'prestation',
        'value'   => 'Restauration',
        //'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($restaurationForm);

    //Service & acceuil
    echo form_label('Service & Accueil');
    $servForm = [
        'name'    => 'prestation[]',
        // 'id'      => 'prestation',
        'value'   => 'Service',
        //'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($servForm);

    //animation
    echo form_label('Animation');
    $animationForm = [
        'name'    => 'prestation[]',
        // 'id'      => 'prestation',
        'value'   => 'Animation',
        //'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($animationForm);

    //excursion & guide
    echo form_label('Excursion & guide');
    $guideForm = [
        'name'    => 'prestation[]',
        // 'id'      => 'prestation',
        'value'   => 'guide',
        //'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($guideForm);

    //Transport aérien
    echo form_label('Transport Aérien');
    $avionForm = [
        'name'    => 'prestation[]',
        // 'id'      => 'prestation',
        'value'   => 'Transport',
        //'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($avionForm);

    //Transport car
    echo form_label('Transport Car');
    $carForm = [
        'name'    => 'prestation[]',
        // 'id'      => 'prestation',
        'value'   => 'Car',
        //'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($carForm);

    //Thalasso & spa 
    echo form_label('Thalasso & SPA');
    $spaForm = [
        'name'    => 'prestation[]',
        // 'id'      => 'prestation',
        'value'   => 'SPA',
        //'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($spaForm);

    //croisière
    echo form_label('Croisière');
    $croisiereForm = [
        'name'    => 'prestation[]',
        // 'id'      => 'prestation',
        'value'   => 'Croisiere',
        //'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($croisiereForm);

    echo form_submit('Valider', 'ajouter');

    echo form_reset('Vider', 'reset'); 
    
    
    echo form_close();

    $this->endSection();

    ?>

