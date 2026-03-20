<?php
require_once 'classes/Produto.php';

$produto = new Produto("Notebook", 3500);

// preço antes
$precoAntes = $produto->preco;

// aplicando desconto
$produto->aplicarDesconto(10);

// preço depois
$precoDepois = $produto->preco;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produto com Desconto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Produto</h1>
    <p>Nome: <?php echo $produto->nome; ?></p>
    <p>Preço antes: R$ <?php echo $precoAntes; ?></p>
    <p>Preço com desconto: R$ <?php echo $precoDepois; ?></p>
</div>

</body>
</html>