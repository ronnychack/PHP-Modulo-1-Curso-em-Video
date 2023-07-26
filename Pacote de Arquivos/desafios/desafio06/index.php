<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Somando mesma pagina</title>
</head>
<body>
    <?php 
        //Capturando os dados do formulário Retroalimentado
        // <?php echo $_Server e mesmo <?=$_SERVER
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
        //$soma = $valor1 + $valor2;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <h1>A anatomia de uma divisão</h1>
            <label for="v1">Dividendo:</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?=$dividendo?>">
            <label for="v2">Divisor:</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?=$divisor?>">
            <input type="submit" value="Somar">

        </form>
    </main>
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
            $quociente =  (int)($dividendo/$divisor);
            $resto = $dividendo%$divisor;
            print "<p>A divisão entre os valores <strong>$dividendo</strong> e <strong>$divisor</strong> é igual a <strong>$quociente</strong> e o resto da divisão é <strong>$resto</strong> </p>";
            echo "<ul>";
            echo "<li>Dividendo: $dividendo</li>";
            echo "<li>Divisor: $divisor</li>";
            echo "<li>Quociente:$quociente</li>";
            echo "<li>Resto: $resto</li>";
            echo "</ul>";
        ?>
        <table class="divisao">
                <tr>
                    <td><?=$dividendo?></td>
                    <td><?=$divisor?></td>
                </tr>
                <tr>
                    <td><?=$resto?></td>
                    <td><?=$quociente?></td>
                </tr>
        </table>
    </section>
</body>
</html>