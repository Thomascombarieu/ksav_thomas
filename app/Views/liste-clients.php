<?= $this->extend('layout')?>
<?= $this->Section('contenue')?>
<?php
$table = new \CodeIgniter\View\Table();
    // $php_Button = new button;

    $table->setHeading('Code voyage', 'Description', 'Type de voyage', 'Destination');
?>
<?= $this->endSection()?>