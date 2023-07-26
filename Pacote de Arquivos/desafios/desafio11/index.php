<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reajustador de Preços</title>
</head>
<body>
    <?php 
        //Capturando os dados do formulário Retroalimentado
        // <?php echo $_Server e mesmo <?=$_SERVER
        $produto = $_GET['produto'] ?? 0;
        $reajuste = $_GET['reajuste'] ?? 1;
        $reajustado = 0;
        //$soma = $valor1 + $valor2;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <h2>Reajustador de Preços</h2>
            <label for="produto">Preço do Produto (R$):</label>
            <input type="number" name="produto" id="produto" value="<?=$produto?>" required min="1">
            <label for="reajuste">Qual será o percentual de reajuste?<span id="p">?</span>%</label>
            <input type="range" name="reajuste" id="reajuste" value="<?=$reajuste?>" min="1" max="100" step="1" oninput="mudaValor()">
            <input type="submit" value="Reajustar">

        </form>
    </main>
    <section id="resultado">
        <h2>Resultado do reajuste</h2>     
        <?php 
             $reajustado = ($produto*$reajuste)/100 +$produto;
             
            print "<p>O produto que custava $produto , com $reajuste% de aumento vai passar a custar $reajustado  a partir de agora.</p>"
        ?>
    </section>
    <script>
        function mudaValor(){
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>