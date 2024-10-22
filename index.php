<?php

require 'Titulaire.php';
require 'CompteBancaire.php';

$t1 = new Titulaire('Abdelmalik', 'El yahyaoui', '2007-08-22', 'STRASBOURG');
$t2 = new Titulaire('Yassine', 'El yahyaoui', '2000-01-20', 'MULHOUSE');

$c1 = new CompteBancaire('Compte Courant', 5000, 'EUR', $t1);
$c2 = new CompteBancaire('Livret A', 10000, 'EUR', $t1);
$c3 = new CompteBancaire('Compte Courant', 7500, 'EUR', $t2);

echo $t1->afficherInformations();
echo $t2->afficherInformations();

echo "{$c1} avant crédit : Solde initial {$c1->getSolde()} {$c1->getDevise()}<br>";
$c1->crediter(2000);
echo "{$c1} après crédit : Solde initial {$c1->getSolde()} {$c1->getDevise()}<br>";
echo "{$c1} avant débit : Solde initial {$c1->getSolde()} {$c1->getDevise()}<br>";
$c1->debiter(1000);
echo "{$c1} après débit : Solde initial {$c1->getSolde()} {$c1->getDevise()}<br>";

echo "Avant le virement :<br>";
echo "$c1: Solde initial {$c1->getSolde()} {$c1->getDevise()}<br>";
echo "$c2: Solde initial {$c2->getSolde()} {$c2->getDevise()}<br>";

$c1->virement($c2, 1000);

echo "Après le virement :<br>";
echo "$c1: Solde initial {$c1->getSolde()} {$c1->getDevise()}<br>";
echo "$c2: Solde initial {$c2->getSolde()} {$c2->getDevise()}<br>";
