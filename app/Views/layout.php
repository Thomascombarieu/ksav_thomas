<?php

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href=inc/Ksav.css>
    <title>KSAV</title>
</head>
<header>
    <nav>
        <ul>

            <li><a href="liste-voyage">Liste Voyage</a></li>
            <li><a href="liste-client">Liste clients</a></li>
            <li><a href="liste-retour-client">Liste retour clients</a></li>
            <li><a href="main.html">Ajouter un client</a></li>
            <li><a href="main.html">Ajouter un voyage</a></li>
            
            
        </ul>
    </nav>

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