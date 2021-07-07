<!DOCTYPE html,php>
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
    <meta name="robots" content="formulario, follow">
    <!-- para conversar como robo de busca-->
    <title>Curso de PHP - formularios </title>
    <?php
        $texto = $_GET["text"];
        $tamanho = $_GET["tam"];
        $color = $_GET["color"];
    ?>
    <style>
        span.text {
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $color ?>;
        }
    </style>
</head>

<body>
    <div>
        <?php

            echo "<span class='text'> $texto </span>";
         ?>
    </div>
</body>

</html>