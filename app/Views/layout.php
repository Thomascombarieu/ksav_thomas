<?php
helper('html');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo link_tag('inc/Ksav.css') ?>
    <title>KSAV</title>
    <!-- <base href="<?= base_url() ?>"> -->
</head>
<header>
    <nav>
        <ul>

            <li><a href="<?= url_to('Liste_Voyage') ?>">Liste Voyage</a></li>
            <li><a href="<?= url_to('Ajout_Voyage_Form') ?>">Ajouter un voyage</a></li>
            <li><a href="<?= url_to('Liste_Client') ?>">Liste clients</a></li>
            <li><a href="<?= url_to('Ajouter_Client_Form') ?>">Ajouter un Client</a></li>
            <li><a href="<?= url_to('Liste_Retour_Client') ?>">Liste retour clients</a></li>
            <li><a href="<?= url_to('Ajout_Retour_Client_Form') ?>">Ajouter un retour client</a></li>
        
            
            
        </ul>
    </nav>

    <!-- <img src="img/toto.jpg" /> -->

</header>

<body>
    <!-- Insérer la ligne pour le contenu -->
    <?= $this->renderSection('contenu')?>
</body>
<footer>
    <div class="Lfooter">
        <p>Salaun Voyages Companies</p>
    </div>

</footer>

</html>