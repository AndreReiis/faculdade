<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Suporte</title>
    <link rel="stylesheet" href="suporte.css">
</head>
<body>
<!-- fazer formulario para suporte email nome(usuario) telefone --> 
<header>
    <h1>Informe seus dados para suporte</h1>
</header>
<nav>
    <a href="index.php">Início</a> |
    <a href="jogo.php">Jogo</a> |
    <a href="sobre.php">Sobre</a>  |
</nav>
<main>
    <h2>Entre em contato conosco</h2>
    <form action="enviar_contato.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>
        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" id="mensagem" required></textarea><br>
        <button type="submit">Enviar</button>
    </form>
</main>
<footer>