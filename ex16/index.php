<?php
require_once 'classes/Produto.php';
require_once 'classes/Cliente.php';
require_once 'classes/Pedido.php';

// cliente
$cliente = new Cliente("Flávia");

// produtos
$p1 = new Produto("Notebook", 3500);
$p2 = new Produto("Mouse", 150);
$p3 = new Produto("Teclado", 200);

// pedido
$pedido = new Pedido($cliente);
$pedido->adicionarProduto($p1);
$pedido->adicionarProduto($p2);
$pedido->adicionarProduto($p3);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Loja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Resumo do Pedido</h1>
    <p><?php echo $pedido->resumo(); ?></p>
</div>

</body>
</html>