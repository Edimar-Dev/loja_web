<?php

require_once __DIR__ . '/controladores/Main.php';

//Coletion of routes
$rotas = [

    'inicio' => 'main@index',
    'loja'   => 'main@loja',
];

//Defines defect  action
$acao = 'inicio';

//Checks if there is an action in the query string
if (isset($_GET['acao'])) {

    if(!key_exists($_GET['acao'], $rotas)){
        $acao = 'inicio';
    } else {
        $acao = $_GET['acao'];
    }
}

//Deals with the definition of the route
$partes = explode('@',$rotas[$acao]);
$controlador = ucfirst($partes[0]); // ucfirst() Torna a primeira letra maiúscula
$controlador = "core\\controladores\\".$controlador;
$metodo = $partes[1];

$contro = new $controlador();
$contro->$metodo();