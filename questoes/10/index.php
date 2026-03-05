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
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>
        <?php

            $segundosTotais = 50000; // 1) Quantidade Total de segundos

            $horas = floor($segundosTotais / 3600); // 2) Conversão de segundos para horas

            $restoSegundos = $segundosTotais % 3600; // 3) Resto dos segundos

            $minutos = floor($restoSegundos / 60); // 4) Conversão de segundos para minutos

            $segundosFinais = $restoSegundos % 60; // 5) Resto dos segundos finais

            echo "Duração do evento: $horas horas, $minutos minutos e $segundosFinais segundos.";
        ?> 
    </main>
</body>


</html>