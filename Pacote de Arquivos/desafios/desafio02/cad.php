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
        // Gera um número aleatório entre 0 e 100
        $numero = mt_rand(0, 100);

        // Exibe o número gerado
        echo "<p>O valor gerado foi <strong>$numero</strong></p>";
    ?>
     <!-- usando javascript Voltar Pagina anterior -->
    <a href="javascript:history.go(-1)"><input type="button" value="Voltar para a Pagina anterior"></a> 
    </main>
    
</body>
</html>