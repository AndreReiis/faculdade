<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina de compra</title>
</head>
<body>
<?php
// efetuar_compra.php
session_start();

// Simulando a seleção anterior
if (!isset($_SESSION['ingresso'])) {
    header('Location: ingressos.php');
    exit();
}

$ingresso = $_SESSION['ingresso'];
$total = $ingresso['preco'] * $_SESSION['quantidade'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Efetuar Compra - São Paulo x Barcelona</title>
</head>
<body>
    <h1>Efetuar Compra</h1>
    <p>Setor: <?php echo $ingresso['setor']; ?></p>
    <p>Quantidade: <?php echo $_SESSION['quantidade']; ?></p>
    <p>Total: R$ <?php echo number_format($total, 2, ',', '.'); ?></p>

    <form action="processar_compra.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label for="email">E-mail:</label>
        <input type="email" name="email" required>
        <br>
        <label for="pagamento">Informações de Pagamento:</label>
        <input type="text" name="pagamento" placeholder="Número do Cartão" required>
        <br>
        <button type="submit">Finalizar Compra</button>
    </form>
</body>
</html>
</body>
</html>