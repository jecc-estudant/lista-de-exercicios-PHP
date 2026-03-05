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
        <h2>Questão 05: Maior de Três Números</h2>
    </header>

    <main>
        <?php
            $num1 = 13;
            $num2 = 456;
            $num3 = 22;

            if ($num1 >= $num2 && $num1 >= $num3) {
                $maior = $num1;
            } elseif ($num2 >= $num1 && $num2 >= $num3) {
                $maior = $num2;
             } else {
                $maior = $num3;
            }

            echo "O maior número entre $num1, $num2 e $num3 é: $maior";
        ?>
    </main>
</body>

</html>