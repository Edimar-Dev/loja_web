<?php

namespace core\controladores;

use Core\Classes\Loja;

class Main
{
    public function index()
    {

        Loja::Layout([
            'layouts/header',
            'layouts/header_menu',
            'page_inicial',
            'layouts/footer_menu',
            'layouts/footer'
        ]);
    }

    public function loja(){
    
        //Página de apresentação da loja
        Loja::Layout([
            'layouts/header',
            'layouts/header_menu',
            'page_loja',
            'layouts/footer_menu',
            'layouts/footer'
        ]);

    }

    public function novo_cliente(){
        //Página de registo de novo cliente

        echo "Página de registo de novo cliente";
    }

        public function carrinho(){
    
        //Página de apresentação do carrinho
        Loja::Layout([
            'layouts/header',
            'layouts/header_menu',
            'page_carrinho',
            'layouts/footer_menu',
            'layouts/footer'
        ]);

    }

}