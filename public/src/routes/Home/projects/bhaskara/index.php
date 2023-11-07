<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Bhaskara</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Cálculo de Bhaskara
            $a = $_POST["side1"];
            $b = $_POST["side2"];
            $c = $_POST["side3"];
            $delta = ($b * $b) - (4 * $a * $c);
            if ($delta >= 0) {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);

                echo "<div class='title'><h1>Bhaskara</h1></div>";
                echo "<p>As raízes da equação são: <br> x1 = $x1 <br>  x2 = $x2</p>";
            } else {
                echo "<div class='title'><h1>Bhaskara</h1></div>";
                echo "<p>A equação não possui raízes reais.</p>";
            }
        } else {
        ?>
            <form action="" class="form" method="POST">
                <div class="title"><h1>Bhaskara</h1></div>
                <input class="input" name="side1" placeholder="Valor A" required>
                <input class="input" name="side2" placeholder="Valor B" required>
                <input class="input" name="side3" placeholder="Valor C" required>
                <button type="submit" class="button-confirm">Calcular →</button>
            </form>
            <div class="wrapper">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="shadow"></div>
                <div class="shadow"></div>
                <div class="shadow"></div>
            </div>
        <?php
        }
        ?>
    </section>
</body>

</html>
