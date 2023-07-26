<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos php</title>
    <link rel="stylesheet" href="style.css">
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

        // valor absuluto de qualquer numero negativo fica positivo.
        $r = abs(-500);
            print("<br> A resposta do valor -500 do valor absulto(positivo) é $r");

        // Função conversão binario, primeiro numero , segundo base ta em 10, terceiro é base em binário, ideia converte numero inicial em outro.
        $r = base_convert(254,10, 2);
        print("<br> A resposta do numero 254 de decimal para binario é $r");

        // Função que divide numero 5 por 2 só exibi valor inteiro descarta o resto.
        $r = intdiv(5,2);
        print("<br>A resposta divisao entre 5 e 2 sem resto é $r");

        //Função mostra qual valor minimo ou maximo entre os numeros no parentes
        $r = min(5,2,3,0);
        print("<br> A resposta menor numero  é $r");
        $r = max(5,2,3,0);
        print("<br> A resposta maior numero  é $r");

         //Função mostra valor de pi.
        $r = pi();
        print ("<br> A resposta do valor de pi é $r");

         //Função pontecial ou power e versão normal
         
         $r = 5**2;
         print ("<br> A resposta é $r");

         $r = pow(5,2);// perde a ordem de preferencia.
         print ("<br> A resposta da pontecia usando funcao pow é $r");

         //Função Raiz Quadrada
         $r = sqrt(9);
         print("<br> A resposta da raiz de 9 utilizando função(sqrt) de raiz quadrada é $r");
          
         //Função Raiz Quadrada utliza(1/2) , for cubica é (1/3)
         $r = 81 ** (1/2);
         print("<br> A resposta da raiz de 9 quadrada usando conceitos da matematica (81 ** (1/2);) é $r");

         //Soma de dois numero é com string ele soma os valores operador de + soma.
         $r = "2" + "2";
         print("<br> A resposta com as aspas nos numeros usando sinal de + é 2 + 2 = é $r");

        //Soma de dois numero é com string ele soma os valores operador de + soma.
        $r = "2" . "2";
        print("<br> A resposta com as aspas nos numeros utilizando o sinal de ponto é 2 . 2 = é $r");

         ?>
</body>
</html>