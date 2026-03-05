<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 04: Tabuada</h2>
    </header>

    <main>
        <?php
            // 1) Valor Desejado:
            $numero = 5; 

            echo "Tabuada do número $numero:\n";
            echo "------------------\n";

            // 2) Laço que percorre do número 1 a 10, formando a tabuada:
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "$numero x $i = $resultado\n";
            }
        ?>
    </main>
</body>

</html>