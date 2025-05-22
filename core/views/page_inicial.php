<?php
use core\classes\Loja;

$_SESSION['cliente'] = true;

?>

<div>

    <?php if(Loja::clienteLogado()): ?>
           <p>SIM</p>
    <?php else: ?>
           <p>NÃO</p>
    <?php endif; ?>

</div>