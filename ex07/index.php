<?php
require_once 'classes/Aluno.php';

$aluno = new Aluno();

$aluno->setNome("Flávia");
$aluno->setNota(8.5);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Aluno</h1>
    <p>Nome: <?php echo $aluno->getNome(); ?></p>
    <p>Nota: <?php echo $aluno->getNota(); ?></p>
</div>

</body>
</html>