<?php

namespace core\classes;

use Exception;

class Loja {


    public static function Layout($estruturas, $dados = null){

        //verifica se estrutura é um array
        if(!is_array($estruturas)){
            throw new Exception('Estrutura de coleção inválida');
        }

        // variaéveis
        if(!empty($dados) && is_array($dados)){
            extract($dados); // extract : extrai os elementos do array para variáveis
        }
        //apresentar as views da aplicação
        foreach($estruturas as $estrutura){
            include(__DIR__ . "/../views/$estrutura.php");
        }
    }

    public static function clienteLogado(){

        return isset($_SESSION['cliente']);

    }

}
