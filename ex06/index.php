<?php
require_once 'classes/Lampada.php';

$lampada = new Lampada();

// estado inicial
$statusAntes = $lampada->status;

// ligar
$lampada->ligar();
$statusDepoisLigar = $lampada->status;

// desligar
$lampada->desligar();
$statusDepoisDesligar = $lampada->status;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício Lâmpada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Lâmpada</h1>
    <p>Inicial: <?php echo $statusAntes; ?></p>
    <p>Após ligar: <?php echo $statusDepoisLigar; ?></p>
    <p>Após desligar: <?php echo $statusDepoisDesligar; ?></p>
</div>

</body>
</html>