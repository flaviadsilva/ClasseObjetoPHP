<?php
require_once 'classes/Produto.php';

$produto = new Produto();
$produto->nome = "Notebook";
$produto->preco = 3500;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Produto</h1>
    <p><?php echo $produto->exibir(); ?></p>
</div>

</body>
</html>