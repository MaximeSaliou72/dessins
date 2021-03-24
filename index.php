<?php
ini_set('display_errors', 'on');

spl_autoload_register(function ($className) {
    require "classes/$className.php";
    
    // Version concaténation
    // require 'classes/' . $className . '.php';
});



if(! empty($_POST['forme-select'])) {
    
    $longueur = $_POST['total-width'];
    $hauteur = $_POST['total-height'];
    if($_POST['forme-select']  === 'Rectangle') {
        $rectangle = new Rectangle(100, 100, $longueur, $hauteur, "forestgreen", 0.8); 
    } else if ($_POST['forme-select']  === 'Cercle') {
        $circle = new Circle(100, 30, $longueur, $hauteur, "firebrick", 0.8);
    }
    // var_dump($_POST['forme-select'], $circle);
}
// var_dump($rectangle);
require 'index.phtml';