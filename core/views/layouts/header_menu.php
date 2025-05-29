<?php
use core\classes\Loja;
// $_SESSION['cliente'] = 1; // Simula que o cliente está logado, para testes

?>


<div class="container-fluid navegacao">
    <div class="row">
        <div class="col-6 p-3">
            <a href="?a=inicio">
                <h3><?= APP_NAME ?></h3>
            </a>
        </div>
            <div class="col-6 text-end p-3">

                <a href="?acao=inicio" class="menu-item">Início</a>
                <a href="?acao=loja" class="menu-item">Loja</a>

                <!-- Verifica se existe cliente na sessão -->
                <?php if(Loja::clienteLogado()):?>
                
                <a href="?acao=minha_conta" class="menu-item">A minha conta</a>
                <a href="?acao=logout" class="menu-item">Sair</a>

                <?php else:?>
                
                <a href="?acao=login" class="menu-item">Entrar</a>
                <a href="?acao=novo_cliente" class="menu-item">Registar</a>

                <?php endif;?>

                <a href="?acao=carrinho"><i class="fa-solid fa-cart-arrow-down"></i></a>

                <span class="badge bg-warning"></span>
            </div>
    </div>
</div>
