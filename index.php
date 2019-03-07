<?php 

require_once(__DIR__."/Carros.php");
require_once(__DIR__."/Motos.php");
require_once(__DIR__."/erros.php");


$fox = new Carros('volkswagen', 'Chumbo', '150');
$fox->setDoors(4);

$gol = new Carros('volkswagen', 'Preto', '140');
$gol->setDoors(2);

$titan = new Motos('Honda', 'Vermelha', '150');


echo $gol->getDoors();
