<?php
session_start();

// Inicializa o array de usuários caso ele não exista
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Criptografa a senha antes de armazená-la
    $_SESSION['users'][$username] = password_hash($password, PASSWORD_DEFAULT);

    $mensagem = "Registro realizado com sucesso! Você pode fazer login agora.";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="registro.css">
    <title>Registro</title>
</head>
<body>

<div class="main-content">
<header>
    <h1>Registrar-se</h1>
</header>
<main>
    <?php if (isset($mensagem)) : ?>
        <p style="color: green;"><?= $mensagem ?></p>
    <?php endif; ?>
    <form action="registro.php" method="post">
        <label for="username">Usuário:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Registrar</button>
    </form>
    <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
</main>
</div>

</body>
</html>
