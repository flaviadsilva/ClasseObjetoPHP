<?php
require_once 'classes/Usuario.php';

// usuário "cadastrado"
$usuario = new Usuario("flavia@email.com", "123456");

// tentativa de login
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $resultado = $usuario->login($email, $senha);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Login</h1>

    <form method="POST">
        <input type="email" name="email" placeholder="Digite seu email" required><br><br>
        <input type="password" name="senha" placeholder="Digite sua senha" required><br><br>
        <button type="submit">Entrar</button>
    </form>

    <?php if ($resultado): ?>
        <p class="resultado"><?php echo $resultado; ?></p>
    <?php endif; ?>
</div>

</body>
</html>