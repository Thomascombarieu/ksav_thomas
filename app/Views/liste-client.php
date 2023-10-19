<?= $this->extend('layout')?>
<?= $this->Section('contenue')?>
<?php
$table = new \CodeIgniter\View\Table();
    // $php_Button = new button;

    $table->setHeading('N°Client', 'Nom', 'Prénom', 'Adresse','Tel');
    $table->addRow('1','Votte','Mathyss','mathyssvotte@gmail.com','07 83 54 72 55' );
    $table->addRow('124','Combarieu','Thomas','Combarieu.tho82@gmail.com','06 77 88 44 22' );
    $table->addRow('125',);
    $table->addRow('315',);

    echo $table->generate();
?>
<?= $this->endSection()?>