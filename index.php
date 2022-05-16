<?php
require __DIR__ . '/vendor/autoload.php';
use TheFightClub\Model\Business\Personnage;

$perso = new Personnage(23,34,50,0,'John Sanders');
echo $perso->nom . "<br>";
$perso->afficherExperience();
$perso->gagnerExperience();
echo "<br>";
echo "et après avoir gagné de l'expérience....<br>";
$perso->afficherExperience();