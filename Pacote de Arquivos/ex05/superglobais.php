<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio Php</title>
</head>
<body>
    <main>
        <pre>
            <?php 
                    // colocando cookie no navegador em html
                    setcookie("dia-da-semana","Segunda-feira",time() + 3600);

                    // iniciando sessão comando 
                    session_start();
                    $_SESSION["inicio"] ="Funcionou!!";

                echo "<h1> Super Global GET</h1>";
                var_dump($_GET);

                echo "<h1>Super Global POST</h1>";
                var_dump($_POST);

                echo "<h1>Super Global REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>Super Global Cookie</h1>";
                var_dump($_COOKIE);

                echo "<h1>Super Global Session</h1>";
                var_dump($_SESSION);

                echo "<h1>Super Global ENV</h1>";
                var_dump($_ENV);              
                // foreach (getenv() as $c => $v) {
                //     echo "<br> $c -> $v ";
                // }

                echo "<h1>Super Global Server</h1>";
                var_dump($_SERVER);

                echo "<h1>Super Global GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>  
    </main>
    
</body>
</html>