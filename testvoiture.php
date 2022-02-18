<?php
//require fiha erreur fatal donc il arret 3akess include tkaml 3adi just t affiche msg error
require_once "model/voiture.php";
$v1 = new voiture("bmw", 250, 5000);
$v1->affichage();
$v1->setvitessemax(500);
$v1->affichage();



?>