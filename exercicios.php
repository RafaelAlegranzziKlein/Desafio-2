<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados dos Exercícios de PHP</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #212529;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            /* Para conter o box-shadow */
        }

        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin: 0;
            text-align: center;
        }

        .exercicio {
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }

        .exercicio:last-child {
            border-bottom: none;
        }

        .exercicio h3 {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }

        .resultado {
            background-color: #e9f5ff;
            border: 1px solid #b3d7ff;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
        }

        .resultado strong {
            color: #004a99;
        }

        code {
            background-color: #e8e8e8;
            padding: 2px 5px;
            border-radius: 3px;
        }

        ul,
        ol {
            padding-left: 20px;
        }
    </style>
</head>


<body>


    <div class="container">
        <h1>Resultados dos Exercícios de PHP</h1>

        <div>
            <?php
            // Bloco de código PHP começa aqui
            echo "<br>";
            echo "<h1>Resultados dos Exercícios de PHP dos numeros de 1-4</h1>";
            // ----------------------------------------------------
            // Exercício Exemplo: Quadrado de um número
            echo "<div class='exercicio'>";
            echo "<h3>Exemplo: Quadrado de um numero</h3>";
            $num1 = 15;
            $quad = pow($num1, 2);
            echo "<p>Valor: <code>$num1</code></p>";
            echo "<div class='resultado'>O quadrado do numero é: <strong>$quad</strong></div>";
            echo "</div>";

            // ----------------------------------------------------
            // Exercício 1: Soma de dois números

            echo "<div class='exercicio'>";
            echo "<h3>Soma</h3>";
            $num1 = 15;
            $num2 = 10;
            $soma = $num1 + $num2;
            echo "<p>Valor: <code>$num1</code></p>";
            echo "<p>Valor: <code>$num2</code></p>";
            echo "<div class='resultado'>A soma dos números é: <strong>$soma</strong></div>";
            echo "</div>";


            // ----------------------------------------------------
            // Exercício 2: Média de três números
            echo "<div class='exercicio'>";
            echo "<h3>Média de três números</h3>";
            $num1 = 15;
            $num2 = 10;
            $num3 = 20;
            $media = ($num1 + $num2 + $num3) / 3;
            echo "<p>Valor: <code>$num1</code></p>";
            echo "<p>Valor: <code>$num2</code></p>";
            echo "<p>Valor: <code>$num3</code></p>";
            echo "<div class='resultado'>A média dos números é: <strong>$media</strong></div>";
            echo "</div>";

            // ----------------------------------------------------
            // Exercício: Metros para Centímetros
            echo "<div class='exercicio'>";
            echo "<h3>Metros para Centímetros</h3>";
            $metros = 5;
            $centimetros = $metros * 100;
            echo "<p>Valor em Metros: <code>$metros</code></p>";
            echo "<div class='resultado'>Valor em Centímetros: <strong>$centimetros</strong></div>";
            echo "</div>";

            // ----------------------------------------------------
            // Exercício: Area do Retangulo
            echo "<div class='exercicio'>";
            echo "<h3>Area do retangulo</h3>";
            $base = 10;
            $altura = 5;
            $retangulo = $base * $altura;
            echo "<p>Base: <code>$base</code></p>";
            echo "<p>Base: <code>$altura</code></p>";
            echo "<div class='resultado'>Valor do Retangulo: <strong>$retangulo</strong></div>";
            echo "</div>";

            ?>
        </div>

        <div>
            <?php
            echo "<br>";
            echo "<h1>Resultados dos Exercícios de PHP dos numeros de 5-8</h1>";

            // ----------------------------------------------------
            // Exercício Exemplo: Par ou Impar
            echo "<div class='exercicio'>";
            echo "<h3>Exercicio Exemplo :Par ou Impar</h3>";
            $numeroCheck = 5;
            echo "<p>Número: <code>$numeroCheck</code></p>";
            $resultadoCheck = "";
            if ($numeroCheck % 2 == 0) {
                $resultadoCheck = "Par";
            } else {
                $resultadoCheck = "Impar";
            }
            echo "<div class='resultado'>O número é: <strong>$resultadoCheck</strong></div>";
            echo "</div>";


            // ----------------------------------------------------
            // Exercício 5: Positivo ou Negativo
            echo "<div class='exercicio'>";
            echo "<h3>Exercicio 5 :Positivo ou Negativo</h3>";
            $numero1 = 5;
            $numero2 = -5;
            echo "<p>Número 1: <code>$numero1</code></p>";
            echo "<p>Número 2: <code>$numero2</code></p>";
            $resultCheck = "";
            if ($numero1 >= 0) {
                $resultCheck = "Positivo";
            } else {
                $resultCheck = "Negativo";
            }

            $resultCheck2 = "";
            if ($numero2 >= 0) {
                $resultCheck2 = "Positivo";
            } else {
                $resultCheck2 = "Negativo";
            }
            echo "<div class='resultado'>O número 1 é: <strong>$resultCheck</strong></div>";
            echo "<div class='resultado'>O número 2 é: <strong>$resultCheck2</strong></div>";
            echo "</div>";


            // ----------------------------------------------------
            // Exercício 6: Maior de idade

            echo "<div class='exercicio'>";
            echo "<h3>Exercicio 6 :Maior de idade</h3>";
            $idade1 = 18;
            $idade2 = 17;
            echo "<p>Idade 1: <code>$idade1</code></p>";
            echo "<p>Idade 2: <code>$idade2</code></p>";
            $idadeCheck = "";
            if ($idade1 >= 18) {
                $idadeCheck = "Maior";
            } else {
                $idadeCheck = "Menor";
            }

            $idadeCheck2 = "";
            if ($idade2 >= 18) {
                $idadeCheck2 = "Maior";
            } else {
                $idadeCheck2 = "Menor";
            }
            echo "<div class='resultado'>Voce é <strong>$idadeCheck</strong> de idade</div>";
            echo "<div class='resultado'>Voce é <strong>$idadeCheck2</strong> de idade</div>";
            echo "</div>";

            // ----------------------------------------------------
            // Exercício 7 : Aprovação

            echo "<div class='exercicio'>";
            echo "<h3>Exercicio 7 :Aprovação</h3>";
            $alunoNota1 = 8.5;
            $alunoNota2 = 5.9;
            echo "<p>Aluno 1 Nota: <code>$alunoNota1</code></p>";
            echo "<p>Aluno 2 Nota: <code>$alunoNota2</code></p>";
            $notaCheck = "";
            if ($alunoNota1 >= 6) {
                $notaCheck = "Aprovado";
            } else {
                $notaCheck = "Reprovado";
            }

            $notaCheck2 = "";
            if ($alunoNota2 >= 18) {
                $notaCheck2 = "Aprovado";
            } else {
                $notaCheck2 = "Reprovado";
            }
            echo "<div class='resultado'>Aluno 1 : <strong>$notaCheck</strong> com a nota <strong>$alunoNota1</strong> </div>";
            echo "<div class='resultado'>Aluno 2 : <strong>$notaCheck2</strong> com a nota <strong>$alunoNota2</strong> </div>";
            echo "</div>";


            // ----------------------------------------------------
            // Exercício 8 : Maior de Dois

            echo "<div class='exercicio'>";
            echo "<h3>Exercício 8 : Maior de Dois</h3>";
            $num1 = 15;
            $num2 = 22;
            echo "<p>Numero 1 : <code>$num1</code></p>";
            echo "<p>Numero 2 : <code>$num2</code></p>";
            $ordemCheck = "";
            if ($num1 > $num2) {
                $ordemCheck = "O numero maior é <strong>$num1<strong>";
            } elseif ($num1 == $num2) {
                $ordemCheck = "<strong>Não tem numero maior</strong>";
            } else {
                $ordemCheck = "O numero maior é <strong>$num2</strong>";
            }
            echo "<div class='resultado'> $ordemCheck</div>";
            echo "</div>";



            ?>
        </div>

        <div>
            <?php
            echo "<br>";
            echo "<h1>Resultados dos Exercícios de PHP dos numeros de 9-11</h1>";

            // ----------------------------------------------------
            // Exercício com: Switch

            echo "<div class='exercicio'>";
            echo "<h3>Exercício Exemplo : Cor Preferida (Switch)</h3>";
            $corNum = 2; // 1 = Azul
            echo "<p>Número da Cor Preferida: <code>$corNum</code></p>";
            $corNome = "";
            switch ($corNum) {
                case 1:
                    $corNome = "Azul";
                    break;
                case 2:
                    $corNome = "Verde";
                    break;
                case 3:
                    $corNome = "Amarelo";
                    break;
                case 4:
                    $corNome = "Laranja";
                    break;
                case 5:
                    $corNome = "Branco";
                    break;
                case 6:
                    $corNome = "Preto";
                    break;
                case 7:
                    $corNome = "Lilás";
                    break;
                default:
                    $corNome = "Cor inválida";
            }
            echo "<div class='resultado'>Cor Preferida: <strong>$corNome</strong></div>";
            echo "</div>";


            // ----------------------------------------------------
            // Exercício 9: Dia da Semana

            echo "<div class='exercicio'>";
            echo "<h3>Exercício 9 : Dia da Semana (Switch)</h3>";
            $semNum = 2; //numero da semana Exemplo 7 sabado 
            /*
            1 = domingo
            2 = segunda
            3 = terça
            4 = quarta
            5 = quinta
            6 = sexta
            7 = sabado
            */

            echo "<p>Dia da semana: <code>$semNum</code></p>";
            $semNome = "";
            switch ($semNum) {
                case 1:
                    $semNome = "domingo";
                    break;
                case 2:
                    $semNome = "segunda";
                    break;
                case 3:
                    $semNome = "terça";
                    break;
                case 4:
                    $semNome = "quarta";
                    break;
                case 5:
                    $semNome = "quinta";
                    break;
                case 6:
                    $semNome = "sexta";
                    break;
                case 7:
                    $semNome = "sabado";
                    break;
                default:
                    $semNome = "Numero invalido";
            }
            echo "<div class='resultado'><strong>$semNome</strong></div>";
            echo "</div>";

            // ----------------------------------------------------
            // Exercício 10: Vogal ou Consoante

            echo "<div class='exercicio'>";
            echo "<h3>Exercício 10 : Vogal ou Consoante </h3>";
            $letra = 'a';
            echo "<p>Letra: <code>$letra</code></p>";
            $letraCheck = "";
            switch (strtolower($letra)) {
                case 'a':
                case 'e':
                case 'i':
                case 'o':
                case 'u':
                    $letraCheck = "Vogal";
                    break;
                default:
                    $letraCheck = "Consoante";
            }
            echo "<div class='resultado'>A letra é: <strong>$letraCheck</strong></div>";
            echo "</div>";

            // ----------------------------------------------------
            // Exercício 11: Status do Pedido

            echo "<div class='exercicio'>";
            echo "<h3>Exercício 11 : Status do Pedido </h3>";
            $statusNum = 3; // Exemplo: 1 = Pendente
            echo "<p>Status do Pedido: <code>$statusNum</code></p>";
            $statusNome = "";
            switch ($statusNum) {
                case 1:
                    $statusNome = "Pendente";
                    break;
                case 2:
                    $statusNome = "Em Preparo";
                    break;
                case 3:
                    $statusNome = "Enviado";
                    break;
                case 4:
                    $statusNome = "Concluído";
                    break;
                case 5:
                    $statusNome = "Cancelado";
                    break;
                default:
                    $statusNome = "Status inválido";
            }
            echo "<div class='resultado'>Status do Pedido: <strong>$statusNome</strong></div>";
            echo "</div>";








            ?>
        </div>

        <div>
            <?php
            echo "<br>";
            echo "<h1>Resultados dos Exercícios de PHP dos numeros de 12-16</h1>";
            // ----------------------------------------------------
            // Lista dos pares entre 0 e 10 (For)
            echo "<div class='exercicio'>";
            echo "<h3>Lista de pares entre 0 e 10(For)</h3>";
            echo "<div class='resultado'>";
            for ($i = 0; $i <= 10; $i += 2) {
                echo "<strong>$i</strong> ";
            }
            echo "</div>";
            echo "</div>";



            // Fim do bloco PHP
            ?>
        </div>
    </div>
</body>

</html>