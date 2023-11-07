<?php
$lanchesImagens = array(
    "Mega Duende" => "assets/megastacker.png",
    "Duende Saladão" => "assets/whopperduplo.png",
    "Guaraná Lata" => "assets/guarana.png",
    "Coca-Cola Lata" => "assets/coca.png",
    "Milkshake de Nutella" => "assets/milkshake1.png",
    "Pudim de Leite" => "assets/pudim.png",
);

$lanchesPrecos = array(
    "Mega Duende" => 24.90,
    "Duende Saladão" => 25.90,
    "Guaraná Lata" => 6.90,
    "Coca-Cola Lata" => 6.90,
    "Milkshake de Nutella" => 15.90,
    "Pudim de Leite" => 5.90,
);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/icon48.png" type="image/x-icon">
    <link rel="stylesheet" href="style/carrinho.css">
    <title>Finalizando pedido!</title>
    <style>
        body{
            background-color: #024602;
        }

        .form-pag {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            text-shadow: 2px 1px 6px #FFD700;
            font-weight: bold;
            display: flex;
            align-items: baseline;
            justify-content: space-around;
        }
    </style>
</head>

<body>
    <div class="container">
        <main>
            <fieldset>
                <legend>Carrinho</legend>
                <h3>Seus pedidos!</h3>
                <div class="form">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $total = 0;

                        if (isset($_POST['lanches']) && is_array($_POST['lanches'])) {
                            $lanchesSelecionados = $_POST['lanches'];

                            foreach ($lanchesSelecionados as $lanche => $quantidade) {
                                $nomeLanche = $lanche;
                                $quantidadeLanche = $quantidade;
                                $precoLanche = $lanchesPrecos[$nomeLanche];
                                $subtotalLanche = $quantidadeLanche * $precoLanche;

                                if ($quantidade > 0) {
                                    echo "<div class='txt'>Lanche: $lanche<br> Quantidade: $quantidade<br>";
                                    if (array_key_exists($lanche, $lanchesImagens)) {
                                        $imagemURL = $lanchesImagens[$lanche];
                                        echo "<img src='$imagemURL' alt='$lanche' width='100'><br> R$ $subtotalLanche";
                                    } else {
                                        echo "Imagem não está disponível";
                                    }
                                    echo "</div>";

                                    $total += $subtotalLanche;
                                }
                            }
                        }
                        if (isset($_POST['refris']) && is_array($_POST['refris'])) {
                            $refrisSelecionados = $_POST['refris'];

                            foreach ($refrisSelecionados as $refri => $quantidade) {
                                $nomeLanche = $refri;
                                $quantidadeLanche = $quantidade;
                                $precoLanche = $lanchesPrecos[$nomeLanche];
                                $subtotalLanche = $quantidadeLanche * $precoLanche;

                                if ($quantidade > 0) {
                                    echo "<div class='txt'>Refri: $refri<br> Quantidade: $quantidade<br>";
                                    if (array_key_exists($refri, $lanchesImagens)) {
                                        $imagemURL = $lanchesImagens[$refri];
                                        echo "<img src='$imagemURL' alt='$refri' width='100'><br> R$ $subtotalLanche";
                                    } else {
                                        echo "Imagem não está disponível";
                                    }
                                    echo "</div>";

                                    $total += $subtotalLanche;
                                }
                            }
                        }
                        if (isset($_POST['sobremesas']) && is_array($_POST['sobremesas'])) {
                            $sobremesasSelecionadas = $_POST['sobremesas'];

                            foreach ($sobremesasSelecionadas as $sobremesa => $quantidade) {
                                $nomeLanche = $sobremesa;
                                $quantidadeLanche = $quantidade;
                                $precoLanche = $lanchesPrecos[$nomeLanche];
                                $subtotalLanche = $quantidadeLanche * $precoLanche;

                                if ($quantidade > 0) {
                                    echo "<div class='txt'>Sobremesa: $sobremesa<br> Quantidade: $quantidade<br>";
                                    if (array_key_exists($sobremesa, $lanchesImagens)) {
                                        $imagemURL = $lanchesImagens[$sobremesa];
                                        echo "<img src='$imagemURL' alt='$sobremesa' width='100'><br> R$ $subtotalLanche";
                                    } else {
                                        echo "Imagem não está disponível";
                                    }
                                    echo "</div>";

                                    $total += $subtotalLanche;
                                }
                            }

                        }
                    }
                    ?>
                </div>
                <div class="form-pag" style="margin-top:10px">
                    <?php
                    echo "Total do Pedido: R$ $total";
                    ?>
                </div>
            </fieldset>
        </main>
    </div>
    <script src="carrinho.js"></script>
</body>

</html>