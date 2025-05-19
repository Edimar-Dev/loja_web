<?php

use Core\Classes\Database;

session_start();

require_once '../config.php';

require_once '../vendor/autoload.php';


$bano = new Database();

$clientes = $bano->select("SELECT * FROM clientes");

echo "<pre>";
print_r($clientes);


