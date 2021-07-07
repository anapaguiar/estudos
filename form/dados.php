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
</head>
<body>
    <div>
        <?php
            $nome = empty($_POST["name"]) ? "Nome nao informado" : $_POST["name"];
            $year = empty($_POST["year"]) ? "Ano nao informado" : $_POST["year"];
            $sexo = $_POST["sexo"];
            $idade = empty($_POST["year"]) ? "Idade nao definida." : (date("Y") - $year);

            echo "$nome tem $idade anos e é $sexo."
        ?>
        <p>
            <a href="./formulario.html">Home</a>
        </p>
    </div>
</body>
</html>