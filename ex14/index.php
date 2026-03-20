<?php
require_once 'classes/Produto.php';
require_once 'classes/Carrinho.php';

$carrinho = new Carrinho();

// criando produtos
$p1 = new Produto("Notebook", 3500);
$p2 = new Produto("Mouse", 150);
$p3 = new Produto("Teclado", 200);

// adicionando ao carrinho
$carrinho->adicionarProduto($p1);
$carrinho->adicionarProduto($p2);
$carrinho->adicionarProduto($p3);

$total = $carrinho->calcularTotal();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Carrinho</h1>

    <p>Produtos:</p>
    <ul>
        <li><?php echo $p1->nome; ?> - R$ <?php echo $p1->preco; ?></li>
        <li><?php echo $p2->nome; ?> - R$ <?php echo $p2->preco; ?></li>
        <li><?php echo $p3->nome; ?> - R$ <?php echo $p3->preco; ?></li>
    </ul>

    <p><strong>Total: R$ <?php echo $total; ?></strong></p>
</div>

</body>
</html>