<?php
spl_autoload_register(function ($class_name) {
    
    $path = str_replace('\\', '/', $class_name);
    
    require_once('src/'.$path.'.php');
});

use Dta\Model\Auteur as Auteur;
use Dta\Model\Livre as Livre;
use Dta\Model\Bibliotheque as Bibliotheque;

$auteur1 = new Auteur("Victor", "Hugo");

$livre1 = new Livre("Les Misérables", $auteur1, 1862);

$auteur2 = new Auteur("Albert", "Camus");

$livre2 = new Livre("La peste", $auteur2, 1947);

$bibliotheque1 = new Bibliotheque("BU Tréfilerie");

$bibliotheque1->afficherEtat();

echo "<br> ------------------------ <br>";

$bibliotheque1->ajouterLivre($livre1);

$bibliotheque1->ajouterLivre($livre2);

$bibliotheque1->afficherEtat();

echo "<br> ------------------------ <br>";

$bibliotheque1->preterLivre($livre1);

$bibliotheque1->preterLivre($livre2);

$bibliotheque1->afficherEtat();

echo "<br> ------------------------ <br>";

$bibliotheque1->retournerLivre($livre1);

$bibliotheque1->afficherEtat();