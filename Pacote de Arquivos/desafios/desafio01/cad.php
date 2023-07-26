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
         $numero = $_REQUEST["numero"] ?? 0;
         $antenumero =  $numero - 1;
         $sucenumero =  $numero + 1;   
         echo "<p>O numero escolhido foi <strong> $numero</strong></p>"; 
         echo "<p>O seu antecessor foi $antenumero</p>";
         echo "<p> O seu sucessor foi $sucenumero</p>"  
    ?>
     <!-- usando javascript Voltar Pagina anterior -->
    <a href="javascript:history.go(-1)"><input type="button" value="Voltar para a Pagina anterior"></a> 
    </main>
    
</body>
</html>