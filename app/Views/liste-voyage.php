<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste-voyages</title>
    <link href="/inc/liste-voyage.css" type="text/css" rel="stylesheet">
</head>


<body>

<a href="<?= url_to('Ajout_Modifier_Voyage' ) ?>">  +  </a>


<?php

$table = new \CodeIgniter\View\Table();
// $php_Button = new button;

$table->setHeading('Code voyage', 'Description', 'Type de voyage','Destination');

$table->addRow('0001', 'Londres est une ville magnifique ! Même si beaucoup de bâtiments sont en rénovation, la richesse architecturale est propre : <br>les bâtiments sont bien entretenus et les rénovations le prouvent !', 'Séjour','Londre');
$table->addRow('0002', 'Blue', 'Circuit','Thaïlande');
$table->addRow('0003', 'blablabla', 'Croisière','Italie');
$table->addRow('0004', 'Blue', 'Séjour','New-York');

echo $table->generate();

?>
</body>

</html>


