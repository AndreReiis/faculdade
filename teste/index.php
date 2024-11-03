<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compra</title>
</head>
<body>
<?php
// ingressos.php
$ingressos = [
    ['id' => 1, 'setor' => 'Arquibancada', 'preco' => 10],
    ['id' => 2, 'setor' => 'Cadeira Especial', 'preco' => 25],
    ['id' => 3, 'setor' => 'Camarote', 'preco' => 50],
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Compra de Ingressos - São Paulo x Barcelona</title>
</head>
<body>
    <h1>Ingressos para São Paulo x Barcelona</h1>
    <form action="comprar.php" method="POST">
        <label for="setor">Selecione o Setor:</label>
        <select name="setor_id">
            <?php foreach ($ingressos as $ingresso): ?>
                <option value="<?php echo $ingresso['id']; ?>">
                    <?php echo $ingresso['setor'] . ' - R$ ' . $ingresso['preco']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" min="1" value="1">
        <button type="submit">Comprar Ingressos</button> 
    </form>
</body>
</html>
</body>
</html>