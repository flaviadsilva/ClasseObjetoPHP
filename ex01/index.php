<?php
require_once 'classes/Pessoa.php';

$pessoa = new Pessoa();
$pessoa->nome = "Flávia";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício Pessoa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Apresentação</h1>
    <p><?php echo $pessoa->apresentar(); ?></p>
</div>

</body>
</html>