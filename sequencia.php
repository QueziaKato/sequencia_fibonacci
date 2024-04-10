<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sequencia.css">
    <title>Sequência de Fibonacci</title>
</head>
<body>
    <div class="fibonacci-container">
        <h1>Sequência de Fibonacci</h1>
        <table class="fibonacci-table">
            <tr>
                <th>Número</th>
                <th>Valor</th>
            </tr>
            <?php
            function fibonacci($num){
                $num1 = 0;
                $num2 = 1;
                
                for($i = 0; $i < $num; $i++){
                    echo "<tr><td>" . ($i + 1) . "</td><td>" . $num1 . "</td></tr>";
                    $temp = $num1 + $num2;
                    $num1 = $num2;
                    $num2 = $temp;
                }
            }
 
            // Exemplo de uso
            fibonacci(10);
            ?>
        </table>
    </div>
</body>
</html>
