<?php

require 'Titulaire.php';
require 'CompteBancaire.php';

$t1 = new Titulaire('Pierre', 'jean', '1990-05-15', 'strasbourg');
$t2 = new Titulaire('Said', 'jesus', '1985-10-20', 'mulhouse');

$c1 = new CompteBancaire('Compte Courant', 5000, 'EUR', $t1);
$c2 = new CompteBancaire('Livret A', 10000, 'EUR', $t1);
$c3 = new CompteBancaire('Compte Courant', 7500, 'EUR', $t2);

echo $t1->afficherInformations();
echo $t2->afficherInformations();
$c1->crediter(1000 );
 echo "{$c1} après crédit : Solde initial {$c1->getSolde()} {$c1->getDevise()}";
$c1->debiter(1000);
 echo "{$c1} après débit : Solde initial {$c1->getSolde()} {$c1->getDevise()}";
$c1->virement($c2, 1000);

 echo "\nAprès le virement :\n";
  echo "{$c1}: Solde initial {$c1->getSolde()} {$c1->getDevise()}";
echo "{$c2}: Solde initial {$c2->getSolde()} {$c2->getDevise()}";
