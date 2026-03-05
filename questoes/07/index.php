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
        <h2>Questão 07: Fatorial </h2>
    </header>

    <main>

        <?php
            $numero = 10; // Número para o qual queremos calcular o fatorial
            $fatorial = 1;

            echo "Calculando $numero! = ";

            for ($i = $numero; $i >= 1; $i--) {
                $fatorial *= $i;
            
                // Formatação da saídap para o desenvolvimento matemático. Ex.:"5.4.3.2 . . ."
                echo $i . ($i > 1 ? "." : "");
            }

            echo " = $fatorial";
            ?>
     
    </main>
</body>


</html>