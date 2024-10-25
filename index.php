<?php

require 'Titulaire.php';
require 'CompteBancaire.php';
// créationn de nouveau  titulaire de compte bancaire

$t1 = new Titulaire('Abdelmalik', 'El yahyaoui', '2007-08-22', 'STRASBOURG');
$t2 = new Titulaire('Yassine', 'El yahyaoui', '2000-01-20', 'MULHOUSE');
// création de compte bancaire avec designement des titulaires
$c1 = new CompteBancaire('Compte Courant', 5000, 'EUR', $t1);
$c2 = new CompteBancaire('Livret A', 7500, 'EUR', $t2);

// afficher informations des titulaires
echo $t1->afficherInformations();
echo $t2->afficherInformations();

echo "{$c1} avant crédit :  {$c1->getSolde()} {$c1->getDevise()}<br>";
// crediter
$c1->crediter(100);

echo "{$c1} après crédit : {$c1->getSolde()} {$c1->getDevise()}<br>";

echo "{$c1} avant débit :  {$c1->getSolde()} {$c1->getDevise()}<br>";
// debiter
$c1->debiter(200);

echo "{$c1} après débit :{$c1->getSolde()} {$c1->getDevise()}<br>";


echo "Avant le virement :<br>";

echo "$c1:  {$c1->getSolde()} {$c1->getDevise()}<br>";

echo "$c2:  {$c2->getSolde()} {$c2->getDevise()}<br>";


$c1->virement($c2, 100);

echo "Après le virement :<br>";

echo "$c1:  {$c1->getSolde()} {$c1->getDevise()}<br>";

echo "$c2:  {$c2->getSolde()} {$c2->getDevise()}<br>";


// classe:  Une classe est un modèle ou un plan qui définit les propriétés (attributs) et les méthodes (fonctions) que ses objets vont avoir.Par exemple, une classe Voiture pourrait avoir des propriétés comme couleur, marque et des méthodes comme demarrer() et arreter().


// objet:Un objet est une instance d'une classe. Lorsque vous créez un objet à partir d'une classe, vous utilisez le modèle défini par la classe pour créer une entité concrète. Par exemple, si Voiture est la classe, une Voiture rouge de marque Toyota est un objet.




// encapsulation: L'encapsulation est un principe clé de la programmation orientée objet qui consiste à restreindre l'accès direct aux propriétés et méthodes d'un objet. Cela permet de protéger l'intégrité des données et de contrôler comment ces données sont accessibles et modifiées.

// Public : Les propriétés et méthodes déclarées comme: public peuvent être accessibles depuis n'importe où, que ce soit à l'intérieur de la classe, dans des sous-classes ou à l'extérieur de la classe. 

// Private : Les propriétés et méthodes déclarées comme: private ne peuvent être accessibles qu'à l'intérieur de la classe elle-même. Elles ne peuvent pas être accessibles par des sous-classes ou des instances de la classe.

// Les propriétés et méthodes déclarées comme:protected peuvent être accessibles dans la classe elle-même et dans les sous-classes, mais pas à l'extérieur de ces classes.
