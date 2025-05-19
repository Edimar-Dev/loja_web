<?php

use Core\Classes\Database;
use Core\Classes\Functions;

session_start();

require_once '../config.php';

require_once '../vendor/autoload.php';

$database = new Database();
$functions = new Functions();

$functions->teste();

echo " OK";



/*
    carregar o config
    carregar classes
    carregar rotas
          - mostar Lojas
          - mostar carrinhos
          - mostrar o backoffice, etc.
*/