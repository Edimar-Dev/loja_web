<?php

namespace core\controladores;

use Core\Classes\Functions;

class Main
{
    public function index()
    {
        

        $dados = [
            'titulo'   => 'Página Inicial',
            'clientes' => ['Pedro', 'Carla', 'Maria']
        ];

        Functions::Layout([
            'layouts/header',
            'page_inicial',
            'layouts/footer'
        ], $dados);
    }

}