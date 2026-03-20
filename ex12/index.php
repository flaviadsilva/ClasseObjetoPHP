<?php
require_once 'classes/ContaBancaria.php';

$conta = new ContaBancaria("Flávia", 1000);

// depósito
$conta->depositar(2500);

// saque válido
$erro1 = $conta->sacar(300);

// saque inválido
$erro2 = $conta->sacar(1500);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conta Bancária</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Conta Bancária</h1>
    <p>Titular: <?php echo $conta->titular; ?></p>
    <p>Saldo atual: R$ <?php echo $conta->saldo; ?></p>

    <?php if ($erro2): ?>
        <p class="erro"><?php echo $erro2; ?></p>
    <?php endif; ?>
</div>

</body>
</html>