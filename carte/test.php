<?php

include 'carte.class.php';

$carte = new Carte();

$carte->setWidth(520);
$carte->setFile('http://chc.sbg.ac.at/maps/capitals.txt');


$carte->run();

?>

