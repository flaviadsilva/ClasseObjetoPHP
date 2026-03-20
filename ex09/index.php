<?php
require_once 'classes/Produto.php';

$produto = new Produto();
$produto->setNome("Notebook");

// tenta definir preço inválido
$erro = $produto->setPreco(100);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Validação de Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Produto</h1>

    <?php if ($erro): ?>
        <p class="erro"><?php echo $erro; ?></p>
    <?php else: ?>
        <p>Produto: <?php echo $produto->getNome(); ?></p>
        <p>Preço: R$ <?php echo $produto->getPreco(); ?></p>
    <?php endif; ?>

</div>

</body>
</html>