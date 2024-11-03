<?php
session_start();

// Verifica se a sessão de ingressos já existe
if (!isset($_SESSION['ingressos'])) {
    $_SESSION['ingressos'] = 0;
}

// Define as informações do evento
$jogo = "Sao Paulo x  barcelona";
$setor = "Arquibancada do Sao Paulo";
$preco = 50.00;  // Valor do ingresso em reais

// Lógica para processar a compra
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Incrementa a quantidade de ingressos comprados
    $_SESSION['ingressos'] += 1;
    $mensagem = "Compra realizada com sucesso! Você adquiriu 1 ingresso para $setor.";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Comprar Ingresso - <?= htmlspecialchars($jogo) ?></title>
    <link rel="stylesheet" href="ingresso.css">
</head>
<body>
<header>
    <h1>Comprar Ingresso para <?= htmlspecialchars($jogo) ?></h1>
</header>
<nav>
    <a href="index.php">Início</a> |
    <a href="suporte.php">Suporte</a> |
    <a href="sobre.php">Sobre</a> |
</nav>
<main       >
    <h2>Detalhes do Jogo</h2>
    <p>Partida: <?= $jogo ?></p>
    <p>Setor: <?= $setor ?></p>
    <p>Preço: R$ <?= number_format($preco, 2, ',', '.') ?></p>

    <!-- Exibe a mensagem de confirmação se houver -->
    <?php if (isset($mensagem)) : ?>
        <p style="color: green;"><?= $mensagem ?></p>
    <?php endif; ?>

    <a href="login.php" style="background-color: black; color: white; text-decoration: none; padding: 2px; border-radius: 4px">Comprar</a>


</main>
<footer>
    <p>&copy; 2024 Loucos por Futebol</p>
</footer>
</body>
</html>