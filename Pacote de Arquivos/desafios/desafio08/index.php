<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisando Numeros Raízes</title>
</head>
<body>
    <?php 
        //Capturando os dados do formulário Retroalimentado
        // <?php echo $_Server e mesmo <?=$_SERVER
        $numero = $_GET['v1'] ?? 0;

         // Calculando as raízes
        //$raizQuadrada = sqrt($numero);
       // $raizCubica = pow($numero, 1/3);
       $raizQuadrada = $numero ** (1/2);
       $raizCubica = $numero **(1/3);
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <h1>Informe um Numero:</h1>
            <label for="v1">Numero:</label>
            <input type="number" name="v1" id="v1" value="<?=$numero?>">
            <input type="submit" value="Calcular Raizes">

        </form>
    </main>
    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
            
            print "<p>Analisando o numero <strong>$numero</strong>, temos:</p>";
            echo "<ul>";
            echo "<li>A sua raiz quadrada é <strong>$raizQuadrada</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>$raizCubica</strong></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>