<?= $this->extend('layout')?>
<?= $this->Section('contenue')?>

<body>
    <?php
    //debut de section
    // $this->extend('layout');
    // $this->section('contenu');
    //import du Form Helper
    helper('form');
    //Création du formulaire AjoutVoyage
    echo form_open(url_to('Modifier_Voyage'));
    echo form_reset('Vider', 'reset');

    // Input pour le nom du voyage

    echo form_label('Nom du Voyage ');
    $nomVoyageForm = [
        'name'      => 'nomVoyage',
        'id'        => 'nomVoyage',
        'placeholder' => 'Entrez le nom du voyage',
        'value'     => set_value('Test'),
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
        'value'     => set_value('voyage voyage ~ ~ ~'),
        //'maxlength' => '100',
        'size'      => '50',
        'style'     => 'width:30%',
    ];
    echo form_textarea($descVoyageForm);

    //input select pour type Voyage

    echo form_label('Type de voyage ');
    $options = [
        'circuit'  => 'Circuit',
        'croisiere'    => 'Croisière',
        'sejour'  => 'Séjour',
        'vol' => 'Vol',
    ];

    echo form_dropdown('typeVoyage', $options,);

    //input destination voyage

    echo form_label('Destination du voyage');
    $destinationVoyageForm = [
        'name'      => 'destVoyage',
        'id'        => 'destVoyage',
        'placeholder' => 'Entrez la destination du voyage',
        'value'     => set_value('Paris'),
        //'maxlength' => '100',
        'size'      => '50',
        'style'     => 'width:30%',
    ];
    echo form_input($destinationVoyageForm);

    //checkbox pour les prestations (il y en a plusieurs)
    echo form_label('Transfert');
    $transfertForm = [
        'name'    => 'transfert',
        'id'      => 'prestation',
        // 'value'   => 'accept',
        'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($transfertForm);

    //hotel
    echo form_label('Hôtel');
    $hotelForm = [
        'name'    => 'hotel',
        'id'      => 'prestation',
        // 'value'   => 'accept',
        'checked' => false,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($hotelForm);

    //Restauration
    echo form_label('Restauration');
    $restaurationForm = [
        'name'    => 'restauration',
        'id'      => 'prestation',
        //'value'   => 'accept',
        'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($restaurationForm);

    //Service & acceuil
    echo form_label('Service & Accueil');
    $servForm = [
        'name'    => 'serv',
        'id'      => 'prestation',
        //'value'   => 'accept',
        'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($servForm);

    //animation
    echo form_label('Animation');
    $animationForm = [
        'name'    => 'animation',
        'id'      => 'prestation',
        //'value'   => 'accept',
        'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($animationForm);

    //excursion & guide
    echo form_label('Excursion & guide');
    $guideForm = [
        'name'    => 'guide',
        'id'      => 'prestation',
        //'value'   => 'accept',
        'checked' => false,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($guideForm);

    //Transport aérien
    echo form_label('Transport Aérien');
    $avionForm = [
        'name'    => 'avion',
        'id'      => 'prestation',
        //'value'   => 'accept',
        'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($avionForm);

    //Transport car
    echo form_label('Transport Car');
    $carForm = [
        'name'    => 'car',
        'id'      => 'prestation',
        //'value'   => 'accept',
        'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($carForm);

    //Thalasso & spa 
    echo form_label('Thalasso & SPA');
    $spaForm = [
        'name'    => 'spa',
        'id'      => 'prestation',
        //'value'   => 'accept',
        'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($spaForm);

    //croisière
    echo form_label('Croisière');
    $croisiereForm = [
        'name'    => 'croisiere',
        'id'      => 'prestation',
        //'value'   => 'accept',
        'checked' => true,
        'style'   => 'margin:10px',
    ];

    echo form_checkbox($croisiereForm);

    echo form_submit('Modifier', 'Modifier le voyage');

    echo form_close();

    // $this->endSection();

    ?>
</body>
<?= $this->endSection()?>
</html>