<?php
namespace AutoLoad;

require_once('AutoLoad.php');

use Classes1, Classes2 as C2;

$carro = new Classes1\Carro();

var_dump($carro);

$pessoa = new Classes1\Pessoa();

var_dump($pessoa);

$equipamento = new C2\Equipamento();

var_dump($equipamento);


