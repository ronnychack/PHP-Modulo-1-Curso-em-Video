<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário Mininio desafio 07</title>
</head>
<body>
    <?php 
        //Capturando os dados do formulário Retroalimentado
        // <?php echo $_Server e mesmo <?=$_SERVER
        $salario = $_GET['salario'] ?? 1320;
        $salariominino = 1320;
        $sobra =0; 
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <h1>Informe seu Salário:</h1>
            <label for="v1">Salário (R$):</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <p>Considerando o salario minimo de <strong>R$<?=number_format($salariominino, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">

        </form>
    </main>
    <section id="resultado">
        <h2>Resultado final</h2>
        <?php

            $nsalario = (int)($salario/$salariominino);
            if($salario>$salariominino)
            $sobra = $salario%$salariominino;
            print "<p>Quem recebe um salário de <strong>$salario</strong> ganha <strong>$nsalario</strong> salários minimos + <strong>$sobra</strong></p>"
        ?>
    </section>
</body>
</html>