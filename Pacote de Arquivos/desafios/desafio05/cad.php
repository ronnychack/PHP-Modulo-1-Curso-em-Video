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
        $numero = $_REQUEST["numero"] ?? "Sem valor";

        // Exibe o valor convertido
        echo "<p>Analisando o numero <strong>" . number_format($numero,3,",",".") . "</strong> informado pelo usuário. </p>";

        $int = (int)$numero;
        $fra = $numero- $int;

        echo "<p>A parte inteira do numero é <strong>$int </strong> . </p>";
        echo "<p>A parte fracionada do numero é <strong>$fra </strong> . </p>";
    ?>
     <!-- usando javascript Voltar Pagina anterior -->
    <a href="javascript:history.go(-1)"><input type="button" value="Voltar para a Pagina anterior"></a> 
    </main>
    
</body>
</html>