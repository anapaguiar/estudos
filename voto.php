<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"> <!--codificacao de caracteres especiais-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- portabilidade para mobile-->
    <meta name="author" content="Ana Paula Aguiar"> <!--autor da pagina-->
    <meta name="description" content="Curso PHP"> <!-- descricao da pagina importante para motores de busca-->
    <meta name="robots" content="eleicao, follow"> <!-- para conversar como robo de busca-->
  <title>Curso de php - Eleicao</title>
</head>
    <body>
        <div>
            <?php
            /* Obrigatorio 18 anos */
            $ano = $_GET["a"];
            echo "Ano de nascimento: " . $ano;
            $idade = 2021-$ano;
            echo "<br> Sua idade é: " .$idade;
            $voto = ($idade > 18 && $idade <= 65) ? "<br> Voto obrigatorio" : "<br> Voto nao obrigatorio.";
            echo $voto;
            ?>
        </div>
    </body>        
</html>