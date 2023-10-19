<?= $this->extend('layout')?>
<?= $this->Section('contenue')?>
<?php
$table = new \CodeIgniter\View\Table();
    // $php_Button = new button;

    $table->setHeading('N°Client', 'Nom', 'Prénom', 'Adresse','Tel');
?>
<?= $this->endSection()?>