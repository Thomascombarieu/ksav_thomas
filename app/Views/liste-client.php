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

foreach ($clients as $client) {
    // echo "<p>$client</p>";
    $table->addRow($client);
}


$table->setHeading('N°Client', 'Nom', 'Prénom','Date_Naissance' ,'Mail', 'Tel','Adresse');


echo $table->generate();
?>
<?= $this->endSection() ?>