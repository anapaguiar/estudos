<!DOCTYPE html>
<html lang="pt">

<head>
    <link rel="stylesheet" href="../_css/estilo.css" />
    <meta charset="UTF-8">
    <!--codificacao de caracteres especiais-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- portabilidade para mobile-->
    <meta name="author" content="Ana Paula Aguiar">
    <!--autor da pagina-->
    <meta name="description" content="Curso PHP">
    <!-- descricao da pagina importante para motores de busca-->
    <meta name="robots" content="index, follow">
    <!-- para conversar como robo de busca-->
    <title>Curso de php - Estrutura IF </title>
</head>

<body>
    <div>
        <?php
                $anoAtual = date("Y");        
                $anoNasc = $_GET["ano"];
                // $anoNasc = isset($_GET["ano"]); ***** ERROR! Why?????
                $idade = $anoAtual - $anoNasc;

                if ($idade < 16) {
                    echo "Voce ainda nao pode votar.";
                } elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
                        echo "Seu voto é opcional.";
                    } 
                    else {
                    echo "Voto obrigatorio!";
                }
        ?>
    </div>
</body>

</html>