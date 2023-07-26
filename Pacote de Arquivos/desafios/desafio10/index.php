<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculando sua Idade</title>
</head>
<body>
    <?php 
        //Capturando os dados do formulário Retroalimentado
        // <?php echo $_Server e mesmo <?=$_SERVER
        $atual = date("Y");
        $anonascimento  = $_GET['anonascimento'] ?? '2000';
        $anoatual = $_GET['anoatual'] ?? $atual;

    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <h1>Calculando Sua idade:</h1>
            <label for="anonascimento">Em que ano você nasceu?</label>
            <input type="number" name="anonascimento" id="anonascimento" value="<?=$anonascimento?>" required min="1900" max="<?=$atual?>">
            <label for="anoatual">Quer saber sua idade em que ano?(atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="anoatual" id="anoatual" value="<?=$anoatual?>" required >
            <input type="submit" value="Qual será minha idade">

        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
            $idade = 0;
            if($anoatual > $anonascimento){
            $idade = ($anoatual - $anonascimento);
            }
            if($idade == 0){
                print "<p> <strong>Digite idade atual corretamente </strong><p>.";
            }
            print "<p>Quem nasceu em $anonascimento vai ter <strong>$idade anos</strong> em $anoatual.</p>"
        ?>
    </section>
</body>
</html>