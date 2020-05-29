<?php

require_once "vendor/autoload.php";

use iagoprior\digitalcep\Search;

$busca = new Search;

$resultado = $busca->getAddresFromZipcode('01001000');

print_r($resultado);