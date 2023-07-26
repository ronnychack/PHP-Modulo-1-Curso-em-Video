<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 80px;
            margin-bottom: 20px;
        }
    </style>
    <title>Caixa Eletronico</title>
</head>
<body>
    <?php 
        //Capturando os dados do formulário Retroalimentado
        // <?php echo $_Server e mesmo <?=$_SERVER
        $saque = $_GET['saque'] ?? 0;
        //step limita multiplos de 5.
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <h1>Caixa Eletrônico</h1>
            <label for="saque">Qual valor deseja sacar? (R$):</label>
            <input type="number" name="saque" id="saque" value="<?=$saque?>" required step="5">
            <p>*Notas Disponíveis: R$100, R$50, R$10 e R$5.</p>
            <input type="submit" value="Sacar">

        </form>
    </main>
    <?php 
          //  $saque = 440;
            $resto = $saque;
            // Saque de 100 reais
            $total100 = (int)($resto/ 100); 
            $resto = $resto % 100;
            // Saque de 50 reais
            $total50 = (int)($resto/ 50);
            $resto = $resto % 50;
            // Saque de 10
            $total10 = (int)($resto/ 10);
            $resto = $resto % 10;
            // Saque de 5
            $total5 = (int)($resto/ 5);
            $resto = $resto % 5;
        ?>
    <section id="resultado">
        <h2>Saque de R$<?=$saque?> realizado.</h2>

        <p>O caixa eletrônico vai entregar seguintes notas:</p>
        <ul>
             <li><img src='imagens/100-reais.jpg' alt='100 reais' class='nota'><strong><?=$total100?></strong>x100.</li>
            <li><img src='imagens/50-reais.jpg' alt='50 reais' class='nota'><strong><?=$total50?></strong>x50.</li>
            <li><img src='imagens/10-reais.jpg' alt='10 reais' class='nota'><strong><?=$total10?></strong>x10.</li>
            <li><img src='imagens/5-reais.jpg' alt='5 reais' class='nota'><strong><?=$total5?></strong>x5.</li>
        </ul>
    </section>
</body>
</html>