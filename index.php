<?php

require "form.php";
$yo = new html();
echo $yo->meta();
$nathan = new form();

echo $nathan->form();

echo $nathan->input('text','hennaux','nom');
echo $nathan->input('text','nathan','prenom');
echo $nathan->input('text','charleroi','ville');
echo $nathan->input('radio','','');
echo $nathan->input('checkbox','','');
echo $nathan->textarea('text','','');
echo $nathan->select('text','','');
echo $nathan->submit();
echo $nathan->lien();
echo $nathan->img();
echo $nathan->js(); 


$vroom = new voiture();
$vroom->immatriculation = '1-ABC-123';
$vroom->mise = '01/02/2015';
$vroom->kilometrage = '123456km';
$vroom->modèle = 'TT';
$vroom->marque = 'Audi';
$vroom->couleur = 'bleu';
$vroom->poids = '1300kg';
echo $vroom->imma();
echo $vroom->mise();
echo $vroom->kilometrage();
echo $vroom->modèle();
echo $vroom->marque();
echo $vroom->couleur();
echo $vroom->poids();



?>
