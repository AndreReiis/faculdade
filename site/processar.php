<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $numero_cartao = $_POST['numero_cartao'];
    $validade_cartao = $_POST['validade_cartao'];
    $cvv = $_POST['cvv'];

    // Aqui você pode processar os dados, como validar e armazenar em um banco de dados.
    // Para o exemplo, vamos apenas redirecionar para a página de sucesso.

    // Redirecionar para a página de sucesso
    header("Location: sucesso.php");
    exit();
}
?>