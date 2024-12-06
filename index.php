<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Revisão</title>
</head>
<body>
    <h1>Revisão de Comandos PHP</h1>

    <?php
        // PHP Syntax
        echo "<h2>PHP Syntax</h2>";
        echo "Olá, Mundo!<br>";

        // PHP Arrays
        echo "<h2>PHP Arrays</h2>";

        // Array simples
        $frutas = array("Maçã", "Banana", "Cereja");
        echo "Primeira fruta: " . $frutas[0] . "<br>";

        // Array associativo
        $idades = array("João" => 25, "Maria" => 30, "José" => 22);
        echo "Maria tem " . $idades["Maria"] . " anos.<br>";

        // Loop em arrays
        echo "<h3>Lista de frutas:</h3>";
        foreach ($frutas as $fruta) {
            echo "- $fruta<br>";
        }
    ?>
</body>
</html>
