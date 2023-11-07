<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ano = $_POST["txtano"];
    $genero = $_POST["radsex"];
    $dataAtual = new DateTime();
    $anoAtual = $dataAtual->format("Y");
    $idade = $anoAtual - $ano;

    $generoTexto = "";
    $imagemSrc = "";

    if ($genero === "homem") {
        $generoTexto = "Homem";
        if ($idade >= 0 && $idade < 10) {
            $imagemSrc = "img/homemCrianca.jpg";
        } elseif ($idade >= 10 && $idade < 21) {
            $imagemSrc = "img/homemJovem.jpg";
        } elseif ($idade >= 21 && $idade < 50) {
            $imagemSrc = "img/homemAdulto.jpg";
        } else {
            $imagemSrc = "img/homemVelho.jpg";
        }
    } elseif ($genero === "mulher") {
        $generoTexto = "Mulher";
        if ($idade >= 0 && $idade < 10) {
            $imagemSrc = "img/mulherCrianca.jpg";
        } elseif ($idade < 21) {
            $imagemSrc = "img/mulherJovem.jpg";
        } elseif ($idade < 50) {
            $imagemSrc = "img/mulherAdulta.jpg";
        } else {
            $imagemSrc = "img/mulherVelha.jpg";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Verificação de Idade e Gênero</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="txtano">Ano de Nascimento:</label>
        <input type="text" name="txtano" id="txtano">
        <br>

        <label>Gênero:</label>
        <input type="radio" name="radsex" value="homem"> Homem
        <input type="radio" name="radsex" value="mulher"> Mulher
        <br>

        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($ano) || !is_numeric($ano) || $ano > $anoAtual) {
            echo '<script>alert("[ERRO] Verifique os dados novamente!");</script>';
        } else {
            echo "<div id='res'>$generoTexto com $idade anos.</div>";
            echo "<div class='seila'><img id='foto' src='$imagemSrc' alt='Imagem'></div>";
        }
    }
    ?>
</body>
</html>
