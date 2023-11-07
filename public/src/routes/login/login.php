<?php
// Inicialize a sessão
session_start();

// Verifique se o usuário já está logado, em caso afirmativo, redirecione-o para a página de boas-vindas
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: ../Home/welcome.php");
    exit;
}

// Incluir arquivo de configuração
require_once "../config/config.php";

// Defina variáveis e inicialize com valores vazios
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processando dados do formulário quando o formulário é enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Verifique se o nome de usuário está vazio
    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor, insira o nome de usuário.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Verifique se a senha está vazia
    if (empty(trim($_POST["password"]))) {
        $password_err = "Por favor, insira sua senha.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validar credenciais
    if (empty($username_err) && empty($password_err)) {
        // Prepare uma declaração selecionada
        $sql = "SELECT id, username, password FROM users WHERE username = :username";

        if ($stmt = $pdo->prepare($sql)) {
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            // Definir parâmetros
            $param_username = trim($_POST["username"]);

            // Tente executar a declaração preparada
            if ($stmt->execute()) {
                // Verifique se o nome de usuário existe, se sim, verifique a senha
                if ($stmt->rowCount() == 1) {
                    if ($row = $stmt->fetch()) {
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if (password_verify($password, $hashed_password)) {
                            // A senha está correta, então inicie uma nova sessão
                            session_start();

                            // Armazene dados em variáveis de sessão
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirecionar o usuário para a página de boas-vindas
                            header("location: ../Home/welcome.php");
                        } else {
                            // A senha não é válida, exibe uma mensagem de erro genérica
                            $login_err = "Nome de usuário ou senha inválidos.";
                        }
                    }
                } else {
                    // O nome de usuário não existe, exibe uma mensagem de erro genérica
                    $login_err = "Nome de usuário ou senha inválidos.";
                }
            } else {
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }

    // Fechar conexão
    unset($pdo);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="./components/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="components/Login.js" defer></script>
    <title>Login</title>
</head>
<body>
    <main>
        <fieldset>
            <div class="titForm">
                <legend>Crie sua <br> Nova Conta</legend>
                <!-- <div class="icon">
                    <img onmouseenter="mover()" id="img" src="assets/icons8-lista-100.png">
                </div> -->
                <div class="login">
                    <span>Não possui uma conta? <br> Crie uma!</span>
                </div>
                <div class="btn">
                    <a href="../register/register.php">
                        <button>Criar</button>
                    </a>
                </div>
            </div>
                <form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <h2>Login</h2>
                    <div class="inp">
                        <input placeholder="Nome de usuário" name="username" type="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        <span>
                            <img src="img/sinal-de-arroba.svg" alt="">
                        </span>
                    </div>
                    <div class="inp" style="display: flex; align-items: center; justify-content: flex-end;">
                    <input placeholder="Senha" type="password" name="password" id="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                        <span class="spanIcon" class="toggle-password" onclick="togglePasswordVisibility('password')">
                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                            <span  id="toggleText"><img class="password-check" id="toggleIcon" src="assets/olho2.svg" alt=""></span>
                        </span>
                        <?php
                        if (!empty($login_err)) {
                            echo '<div class="alert">' . $login_err . '</div>';
                        }
                        ?>
                    </div>
                    <div class="btn">
                        <button>Entrar</button>
                    </div>
                </form>
        </fieldset>
    </main>
</body>
</html>