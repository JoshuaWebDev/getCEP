<?php

require_once "vendor/autoload.php";

use \Joshua\GetCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromCEP('68903240');

print_r($resultado);