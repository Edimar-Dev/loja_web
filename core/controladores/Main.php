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
            'layouts/header_menu',
            'page_inicial',
            'layouts/footer_menu',
            'layouts/footer'
        ], $dados);
    }

    public function loja()
    {
    echo 'loja';
    }

}