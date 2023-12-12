<?= $this->extend('layout') ?>
<?= $this->section('contenu') ?>

<a href="<?= url_to('Modifier_Voyage_Form') ?>"> / </a><br><br>

<?php

$table = new \CodeIgniter\View\Table();
// $php_Button = new button;

foreach ($voyages as $voyage) {
    // echo "<p>$client</p>";

    // $texte='<a href="'.url_to("Modifier_Voyage_Form").'?id='.$voyage.'">Modifier</a>';
    // array_push($voyage,$texte);

    //$voyage[] = $texte;
    $table->addRow($voyage);
}


$table->setHeading('ID voyage', 'Code Voyage', 'Description', 'Type de voyage', 'Destination','modifier le voyage');

echo $table->generate();

?>
<?= $this->endSection() ?>