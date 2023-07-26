<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos php</title>
</head>
<body>
    <h1>Teste de Tipos Primitivos</h1>
    <?php 
    // 0x = hexadecimal 0b = binário e 0 = octal
       //   $num = 0X1A;
         // echo " O valor da variável é $num";

        //  $v = 300;
        //  var_dump(($v));

        // $num =3e2;// 3 x 10 elevado (2)
        // echo "O valor é $num"

        //  $num = (int) 3e2; coerção
        //  var_dump($num);
         
        // $num = (int)"950";
        // var_dump($num);

        // $casado = true;
        // print "O valor de casado é $casado";// false nao mostra nada e verdeiro mostra valor 1.

        // $vet = [2,4.5,"Maria",6,true];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>