<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"> <!--codificacao de caracteres especiais-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- portabilidade para mobile-->
    <meta name="author" content="Ana Paula Aguiar"> <!--autor da pagina-->
    <meta name="description" content="Curso PHP"> <!-- descricao da pagina importante para motores de busca-->
    <meta name="robots" content="index, follow"> <!-- para conversar como robo de busca-->
  <title>Curso de php </title>
</head>
<body>
<div>
    <?php
        $num1 = isset($_GET["a"]);
        $num2 = $_GET["b"];
        $soma = ($num1 + $num2);
        $media = ($num2 + $num1)/2;
        $money = 5.00056;
        $produto = 100;
        echo "A soma dos valores é: " . number_format($soma,2); 
        echo "<br> A media dos valores é: $media";
        echo "<br> Dolar hoje R$: " . number_format($money,2);
        echo "<br> 10% de desconto corresponde a: " . ($produto*10)/100;
        
        echo "<br><br>";
        
        //variavel referenciada, sem o & a=3 b=8 
        $a = 3;
        $b = &$a;
        $b += 5;
        echo "A: " . $a . " e B: " . $b;
        //com o & a=8 e b=8
        
        //operador ternario
        /* $msg = $media > 6 ? "Aprovado" : "Reprovado";
           echo $msg; */
        echo "<br>" . ($media > 6 ? "Aprovado" : "Reprovado");
    ?>
</div>
</body>
</html>
 