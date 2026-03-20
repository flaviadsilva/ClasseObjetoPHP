<?php
require_once 'classes/Pessoa.php';

// criando já com dados
$pessoa = new Pessoa("Flávia", 17);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício Construtor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Pessoa</h1>
    <p><?php echo $pessoa->apresentar(); ?></p>
</div>

</body>
</html>