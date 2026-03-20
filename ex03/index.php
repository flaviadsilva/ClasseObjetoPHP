<?php
require_once 'classes/Conta.php';

$conta = new conta();
$conta->saldo = 1500;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício Conta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Conta Bancária</h1>
    <p><?php echo $conta->verSaldo(); ?></p>
</div>

</body>
</html>