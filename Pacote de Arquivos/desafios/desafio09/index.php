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
        $valor1 = $_GET['valor1'] ?? '';
        $peso1 = $_GET['peso1'] ?? '';
        $valor2 = $_GET['valor2'] ?? '';
        $peso2 = $_GET['peso2'] ?? '';

        $mediaponderada = 0;
        // Media Simples
        $mediasimples= ($valor1 + $valor2)/2;
        // Media Ponderada
        if ($peso1 + $peso2 > 0) {
        $mediaponderada = (($valor1*$peso1) + ($valor2*$peso2))/($peso1 + $peso2);
        }
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <h2>Media Aritmenticas</h2>
            <label for="valor1">1 Valor:</label>
            <input type="number" name="valor1" id="valor1" required min="1" value="<?=$valor1?>">
            <label for="peso1">1 Peso:</label>
            <input type="number" name="peso1" id="peso1" required ="1" value="<?=$peso1?>">
            <label for="valor2">2 Valor:</label>
            <input type="number" name="valor2" id="valor2" required min="1" value="<?=$valor2?>">
            <label for="peso2">2 Peso:</label>
            <input type="number" name="peso2" id="peso2" required min="1" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">

        </form>
    </main>
    <section id="resultado">
        <h2>Calculo das Médias</h2>
        <?php 

            print "<p>Analisando valores <strong>$valor1</strong> e <strong>$valor2 </strong></p>";

            echo "<ul>";
            echo "<li>A <strong> Média Aritmética Simples</strong> entre os valores é igual a $mediasimples</li>";
            echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a $mediaponderada</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>