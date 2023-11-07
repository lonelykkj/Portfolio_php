<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
</head>
<body>
    <main>
        <article>
            <section>
                <form method="post">
                    <legend>Conversor</legend>
                    <fieldset>
                        <div class="ent">
                            <input type="number" name="valorCalcular" id="" placeholder="Valor Calcular:" required/>
                            <select name="conversao">
                                <option value="HorasMinutos">Horas para minutos</option>
                                <option value="MinutosHoras">Minutos para horas</option>
                            </select>
                        </div>
                        <div class="btn">
                            <button type="submit">Converter</button>
                        </div>

                        <div class="result">
                            <?php
                               if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                if (isset($_POST["valorCalcular"])) {
                                    $valorCalcular = floatval($_POST["valorCalcular"]);                            
                                    if ($_POST["conversao"] == "HorasMinutos") {
                                        $resultado = $valorCalcular * 60;
                                        $resultadoFormatado = number_format($resultado, 2);
                                        echo "Resultado: {$valorCalcular} horas é igual a {$resultadoFormatado} minutos.";
                                    } elseif ($_POST["conversao"] == "MinutosHoras") {
                                        $resultado = $valorCalcular / 60;
                                        $resultadoFormatado = number_format($resultado, 2);
                                        echo "Resultado: {$valorCalcular} minutos é igual a {$resultadoFormatado} horas.";
                                    } else {
                                        echo "Selecione uma conversão válida.";
                                    }
                                } else {
                                    echo "Informe um valor para calcular.";
                                }
                            }
                            ?>
                        </div>
                    </fieldset>
                </form>
            </section>
        </article>
    </main>
    <div class="icon">
        <img onmouseenter="mover()" id="img" src="assets/icons8-matemática-50.png">
    </div>
    <script src="index.js"></script>
</body>
</html>