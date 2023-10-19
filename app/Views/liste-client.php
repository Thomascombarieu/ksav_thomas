<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>



<?php
$table = new \CodeIgniter\View\Table();
// $php_Button = new button;


// echo $phrase;

/*foreach ($etudiants as $etudiant) {
    echo "<p>$etudiant</p>";
}*/


$table->setHeading('N°Client', 'Nom', 'Prénom', 'Adresse', 'Tel');

$table->addRow('1', 'Votte', 'Mathyss', 'mathyssvotte@gmail.com', '07 83 54 72 55');
$table->addRow('124', 'Combarieu', 'Thomas', 'Combarieu.tho82@gmail.com', '06 77 88 44 22');
$table->addRow('125', 'Alim', 'Miloud', 'Miloud@Hotmail.fr', '06 99 34 58 02');
$table->addRow('315', 'Dumas', 'Jade', 'IJade@gmail.com', '07 81 02 58 21');

echo $table->generate();
?>
<?= $this->endSection() ?>