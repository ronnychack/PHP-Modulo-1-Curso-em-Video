<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 30px;
        }
    </style>
    <title>Calculo do tempo</title>
</head>
<body>
    <?php 
        //Capturando os dados do formulário Retroalimentado
        // <?php echo $_Server e mesmo <?=$_SERVER
        $segundos = $_GET['segundos'] ?? 1;
       // algoritmo dos segundos

    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <h2>Calculadora do Tempo</h2>
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>" min="1" step="1" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Totalizando Tudo.</h2>
        <?php 
            $sobra = $segundos;
            //Total de Semanas
            $semana = (int)($sobra / 604_800);
            $sobra = $sobra % 604_800;

            //Total de Dias
            $dia = (int)($sobra /86_400);
            $sobra= $sobra % 86_400;

            //Total de Horas
            $hora = (int)($sobra /3_600);
            $sobra = $sobra % 3_600;
            //Total de Minutos
            $minuto =(int)($sobra/60);
            $sobra = $sobra % 60;

            //Total de Segundos
            $segundo = $sobra;
            print "<p>Analisando o valor que você digitou,<strong>$segundos</strong> equivalem a um total de:</p>";

            echo "<ul>";
            echo "<li><strong>$semana</strong> Semanas.</li>";
            echo "<li><strong>$dia</strong> Dias</li>";
            echo "<li><strong>$hora </strong>Horas</li>";
            echo "<li><strong>$minuto</strong> Minutos.</li>";
            echo "<li><strong>$segundo</strong> Segundos.</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>