<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula e exibe o total do produto informado</title>
</head>
<body>
    <?php
    echo "<h3 align='center'>Calcula e exibe o total do produto informado</h3>";
    echo "<hr size='10' color='red'>";
    //Recupera os valores informados nas caixas de textos e armazena nas variaveis,nas linhas abaixo
    $num1 =$_POST["Código"];
    $num2 =$_POST["Descrição"];
    $num3 =$POST["Marca"];
    $num4 =$POST["Preço Unit"];
    $num5 =$POST["Quantidade"];
    $soma = $num4 + $num5;

    echo "Código: "  .$num1;
    echo "<br>Descrição: "  .$num2;
    echo "<br>Marca: "  .$num3;
    echo "<br>Preço: "  .$num4;
    echo "<br>Quantidade: "  .$num5;
    echo "<hr size='8' color='blue' align'left' width='185'>";
    echo "<br> Total: "  .$soma;

    ?>
</body>
</html>