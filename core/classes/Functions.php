<?php

namespace Core\Classes;

use Exception;

class Functions {


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

}
/*

header.php - cabecalaho
nav.php - menu
inicio - index
footer.php - rodapé 

*/