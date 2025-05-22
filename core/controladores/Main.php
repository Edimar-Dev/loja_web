<?php

namespace core\controladores;

use Core\Classes\Loja;

class Main
{
    public function index()
    {
        

        $dados = [
            'titulo'   => APP_NAME. ' '. APP_VERSION,
        ];

        Loja::Layout([
            'layouts/header',
            'page_inicial',
            'layouts/footer'
        ], $dados);
    }

}