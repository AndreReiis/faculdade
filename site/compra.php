<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cartão</title>
    <link rel="stylesheet" href="compra.css">
</head>
<body>

    <form action="processar.php" method="POST"> 
    
        <label for="nome">total de ingressos:</label>
        <input type="text" id="ingressos" name="ingressos" maxlength="2" required > 
    
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="numero_cartao">Número do Cartão:</label>
        <input type="text" id="numero_cartao" name="numero_cartao"  maxlength="16" required>

        <label for="validade_cartao">Validade do Cartão (MM/AA):</label>
        <input type="text" id="validade_cartao" name="validade_cartao" placeholder="MM/AA" maxlength="4" required> <!-- Limite de
        5 -->

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv" maxlength="3" required > <!-- limite 3 caracteres -->

        <div class="buttons">
            <input type="submit" value="Comprar">

    </form>
</body>
</html>