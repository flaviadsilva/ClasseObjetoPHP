<?php
require_once 'classes/Carro.php';

$carro = new Carro();
$carro->marca = "Toyota";

// velocidade inicial
$velocidadeAntes = $carro->velocidade;

// acelerando
$carro->acelerar();

// velocidade depois
$velocidadeDepois = $carro->velocidade;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício Carro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Carro</h1>
    <p>Marca: <?php echo $carro->marca; ?></p>
    <p>Velocidade antes: <?php echo $velocidadeAntes; ?> km/h</p>
    <p>Velocidade depois: <?php echo $velocidadeDepois; ?> km/h</p>
</div>

</body>
</html>