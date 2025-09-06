<?php

require_once 'carro.php';

//$carro1 = new Carro();

$carro1 = new carro("Amarillo","ferrari","gallardo",500,200,2);
$carro2 = new carro("lila","lamborginni","alpha",1500,200,2);
$carro3 = new carro("negro","audi","As",1200,200,4);
$carro4 = new carro("Rosa","Mercedes","clase a",500,200,2);

var_dump($carro1);
var_dump($carro2);
var_dump($carro3);
var_dump($carro4);
