<?php

// PARTIE 1 POO //
class form {
    public function form() {
        return '<form action="#">';

    }

    public function input($type, $name, $placeholder){
        return '<input type='. $type .' name=' . $name . ' placeholder= '. $placeholder .'>';
        $newinput = filter_var($input, FILTER_SANITIZE_STRING);
    }

    public function textarea($type, $name, $placeholder){
        return '<textarea type='. $type .' name=' . $name . ' placeholder= '. $placeholder .'></textarea>';
    }

    public function select($type, $name, $placeholder){
        return '<select type='. $type .' name=' . $name . ' placeholder= '. $placeholder .'></select>';
    }

    public function submit(){
        return '<button type="submit">ENVOYER</button>';
    }
    public function img(){
        return '<img src="frog.jpg">';
    }

    public function lien(){
        return '<a href="www.google.com" target="_blank">Google</a>';
    }

    public function js(){
        return '<script src="script.js"></script>';
    }
}
// PARTIE 2 POO meta //
class html {


    public function meta() {
        return '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" type="text/css" href="style.css">
            <title>Document</title>
        </head>
        <body> ';
    }
}

/// EXO 2 PARC

class voiture {

    public $immatriculation;
    public $mise;
    public $kilometrage;
    public $modèle;
    public $marque;
    public $couleur;
    public $poids;

    public function imma() {
        return "Son immatriculation $this->immatriculation <br>";
    }
    public function mise() {
        return "Sa date de mise en circulation est $this->mise <br>";
    }
    public function kilometrage() {
        return "Son kilometrage est de $this->kilometrage <br>";
    }
    public function modèle() {
        return "C'est un modèle $this->modèle <br>";
    }
    public function marque() {
        return "De la marque $this->marque <br>";
    }
    public function couleur() {
        return "De couleur $this->couleur <br>";
    }
    public function poids() {
        return "Et pèse $this->poids <br>";
    }
}

?>