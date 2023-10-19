<?= $this->extend('layout')?>
<?= $this->section('contenu')?>

    <a href="<?= url_to('Ajout_Voyage_Form') ?>"> + </a><br><br>
    <a href="<?= url_to('Modifier_Voyage_Form') ?>"> / </a><br><br>

    <?php

    $table = new \CodeIgniter\View\Table();
    // $php_Button = new button;

    $table->setHeading('Code voyage', 'Description', 'Type de voyage', 'Destination');

    $table->addRow('0001', 'Londres est une ville magnifique ! Même si beaucoup de bâtiments sont en rénovation, la richesse architecturale est propre : <br>les bâtiments sont bien entretenus et les rénovations le prouvent !', 'Séjour', 'Londre');
    $table->addRow('0002', 'Blue', 'Circuit', 'Thaïlande');
    $table->addRow('0003', 'blablabla', 'Croisière', 'Italie');
    $table->addRow('0004', 'Blue', 'Séjour', 'New-York');

    echo $table->generate();

    ?>
<?= $this->endSection()?>