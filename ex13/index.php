<?php
require_once 'classes/Aluno.php';

$aluno = new Aluno("Flávia", 8, 6);

$media = $aluno->media();
$situacao = $aluno->situacao();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Sistema de Alunos</h1>
    <p>Nome: <?php echo $aluno->nome; ?></p>
    <p>Nota 1: <?php echo $aluno->nota1; ?></p>
    <p>Nota 2: <?php echo $aluno->nota2; ?></p>
    <p>Média: <?php echo $media; ?></p>
    <p>Situação: <?php echo $situacao; ?></p>
</div>

</body>
</html>