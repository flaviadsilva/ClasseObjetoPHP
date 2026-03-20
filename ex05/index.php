<?php
require_once 'classes/Calculadora.php';

$calc = new Calculadora();

$resultado = $calc->somar(10, 5);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Calculadora</h1>
    <p>Resultado: <?php echo $resultado; ?></p>
</div>

</body>
</html>