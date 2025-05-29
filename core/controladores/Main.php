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

        // Verifica se o cliente já está logado
        if(Loja::clienteLogado()) {
            $this->index();
            return;
        }

        //Página de registo de novo cliente
            Loja::Layout([
            'layouts/header',
            'layouts/header_menu',
            'page_criar_cliente',
            'layouts/footer_menu',
            'layouts/footer'
        ]);
    }

    public function criar_cliente(){

        // Verifica se o cliente já está logado
        if(Loja::clienteLogado()) {
            $this->index();
            return;
        }

        // Verifica se o formulário foi enviado

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->index();
            return;
        }


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