<?php
session_start();

// Inicializa o array de usuários caso ele não exista
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica se o usuário existe e se a senha está correta
    if (isset($_SESSION['users'][$username]) && password_verify($password, $_SESSION['users'][$username])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;  
        header("Location: compra.php");
        exit;
    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div style="display: flex; flex-direction: column;  justify-content: center; align-items: center; gap: 15px;">
        <h1>Login</h1>
        <main>
            <?php if (isset($erro)) : ?>
                <p style="color: red;"><?= $erro ?></p>
            <?php endif; ?>
            <form action="login.php" method="post">
                <label for="username">Usuário:</label>
                <input type="text" name="username" id="username" required>
                <br>
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" required>
                <br>
                <button type="submit">Entrar</button>  
            </form>
            <p>Não tem uma conta? <a href="registro.php">Registre-se</a></p>
        </main>
    </div>
</body>
</html>
