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
         $nome = $_REQUEST["nome"] ?? "Sem nome";
         $sobrenome = $_REQUEST["sobrenome"] ?? "Desconhecido";
         echo "<p>É um prazer te conher, <strong>$nome $sobrenome</strong>! Este é meu site.</p>";  
    ?>
     <!-- usando javascript Voltar Pagina anterior -->
    <a href="javascript:history.go(-1)"><input type="button" value="Voltar para a Pagina anterior"></a> 
    </main>
    
</body>
</html>