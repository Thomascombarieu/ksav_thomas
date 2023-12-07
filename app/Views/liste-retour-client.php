<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>



<?php
$table = new \CodeIgniter\View\Table();
// $php_Button = new button;


// foreach($tableau as $element) { ... }

// vérifier le contenu de $clients
// print "<pre>";
// print_r($clients);
// print "</pre>";

foreach ($retourClients as $retourclient) {
    // echo "<p>$client</p>";
    $table->addRow($retourclient);
}


$table->setHeading('Id retour client','Id Voyage','ID client','Numéro de réservation' ,'Date de départ', 'Ville de départ');


echo $table->generate();
?>
<?= $this->endSection() ?>