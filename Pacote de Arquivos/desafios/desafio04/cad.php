<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
    <!-- var_dump($_REQUEST); significado $_GET $_POST $COOKIES JUNÇÃO DAS 3. -->
    <?php
        // Pega dados digitados
        $dinheiro = $_REQUEST["dinheiro"] ?? "Sem valor";

        // Taxa de câmbio fixa para conversão (Exemplo: 1 R$ = 0.18 US$)
        $taxaDeCambio = 0.21;

        // Conversão de reais para dólares americanos
        $valorEmDolares = $dinheiro * $taxaDeCambio;

        // Exibe o valor convertido
        echo "<p>O valor em dólares é: <strong>US$ " . number_format($valorEmDolares, 2, '.', '') . "</strong></p>";
        echo "<p>A cotação fixa foi R$ 5,002 em dolares </p>";
    ?>
     <!-- usando javascript Voltar Pagina anterior -->
    <a href="javascript:history.go(-1)"><input type="button" value="Voltar para a Pagina anterior"></a> 
    </main>
    
</body>
</html>