<?php
session_start();
$jogos = [
    ["nome" => "Sao Paulo X Barcelona", "data" => "15/11/2024","horario" =>"20:00"],
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogos</title>
    <link rel="stylesheet" href="jogo.css">
</head>
<body>
<header>
    <h1>Jogos Disponíveis</h1>
</header>
<nav>
    <a href="index.php">Início</a> |
    <a href="suporte.php">Suporte</a> |
    <a href="sobre.php">Sobre</a> |
</nav>
<main>
    <h2>Próximos Jogos</h2>
    <img src="img/img.png" alt="">
    <ul>
        <?php foreach ($jogos as $jogo) : ?>
            <li><?= $jogo["nome"] ?> - <?= $jogo["data"] ?> -  <?= $jogo["horario"] ?>
            <a href="ingressos.php?jogo=<?= urlencode($jogo["nome"]) ?>">Comprar Ingresso</a>
            </li>
        <?php endforeach; ?>
    </ul>
</main>
<footer>
    <p>&copy; 2024 Loucos por  Futebol </p>
</footer>
</body>
</html>