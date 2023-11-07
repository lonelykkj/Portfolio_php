<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/login.php");
    exit;
}
?>
 

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projetos</title>
    <link rel="stylesheet" href="components/styles/style.css" />
  </head>
  <body>
    <header>
      <div>
        <a href="../../index.html">
            <img src="../../assets/icons8-lista-100.png" alt="">
            <h1 class="linear">PhList</h1>
        </a>
      </div>
      <nav>
        <ul>
        <?php echo htmlspecialchars($_SESSION["username"]); ?>
          <a href="../login/reset-password.php">
            <li>Redefinir senha</li>
          </a>
          <a href="../login/logout.php">
            <li>Sair</li>
          </a>
        </ul>
      </nav>
    </header>
    <main>
      <section class="projetos" id="projetos">
        <h2 class="heading">Nossos <span>Projetos</span></h2>
        <div class="projetos-container">
          <div class="projeto-box">
            <img src="assets/teste2.jpg" alt="" />
            <div class="projeto-layer">
              <h4>Calculadora de Bhaskara</h4>
              <p>
              O projeto "Calculadora de Bhaskara em PHP" é uma aplicação web que permite aos usuários calcular as raízes de uma equação quadrática usando a fórmula de Bhaskara.
              </p>
              <a href="/portfolio_php/public/src/routes/Home/projects/bhaskara/index.php"><i class="bx bx-link-external"><img src="assets/external-link.svg" alt=""></i></a>
            </div>
          </div>

          <div class="projeto-box">
            <img src="assets/teste2.jpg" alt="" />
            <div class="projeto-layer">
              <h4>Calculadora de Idade</h4>
              <p>
              A "Calculadora de Idade em PHP" é uma aplicação web que permite aos usuários inserir sua data de nascimento e, em seguida, calcula e exibe a idade atual com base nessa informação. 
              </p>
              <a href="/portfolio_php/public/src/routes/Home/projects/calcularIdade/index.php"><i class="bx bx-link-external"><img src="assets/external-link.svg" alt=""></i></a>
            </div>
          </div>

          <div class="projeto-box">
            <img src="assets/teste2.jpg" alt="" />
            <div class="projeto-layer">
              <h4>Site da Etec Responsivo</h4>
              <p>
              O projeto de "Recriação Responsiva do Site da ETEC" tem como objetivo reformular o site da Escola Técnica Estadual (ETEC) para torná-lo responsivo. 
              Uma abordagem responsiva garante que o site seja acessível
              </p>
              <a href="/portfolio_php/public/src/routes/Home/projects/etecResponsiva/index.html"><i class="bx bx-link-external"><img src="assets/external-link.svg" alt=""></i></a>
            </div>
          </div>

          <div class="projeto-box">
            <img src="assets/teste2.jpg" alt="" />
            <div class="projeto-layer">
              <h4>Conversor de Horas</h4>
              <p>
              O "Conversor de Horas para Minutos e Minutos para Horas em PHP" é uma aplicação web que permite aos usuários converter entre horas e minutos de forma rápida e fácil.
              </p>
              <a href="/portfolio_php/public/src/routes/Home/projects/horasMinutos/index.php"><i class="bx bx-link-external"><img src="assets/external-link.svg" alt=""></i></a>
            </div>
          </div>

          <div class="projeto-box">
            <img src="assets/teste2.jpg" alt="" />
            <div class="projeto-layer">
              <h4>Duende Lanches</h4>
              <p>
              O "Duende Lanches" é uma aplicação web desenvolvida em PHP que oferece aos usuários a ]
              conveniência de fazer pedidos de lanches de forma simples e rápida. 
              A aplicação permite que os clientes naveguem por um cardápio de lanches, 
              adicionem itens ao seu carrinho de compras e finalizem o pedido de forma eficiente.
              </p>
              <a href="/portfolio_php/public/src/routes/Home/projects/restaurante/index.html"><i class="bx bx-link-external"><img src="assets/external-link.svg" alt=""></i></a>
            </div>
          </div>

          <div class="projeto-box">
            <img src="assets/teste2.jpg" alt="" />
            <div class="projeto-layer">
              <h4>Seleção de Curriculos</h4>
              <p>
              O "Seleção de Curriculos" é uma aplicação web desenvolvida em PHP projetada para facilitar o processo de seleção de currículos e contratação de funcionários.
              </p>
              <a href="/portfolio_php/public/src/routes/Home/projects/curriculo/seleção.html"><i class="bx bx-link-external"><img src="assets/external-link.svg" alt=""></i></a>
            </div>
          </div>
        </div>
      </section>

      <div class="messageBox" id="messageBox">
                <div class="txtsBoxSpam">
                    <img src="assets/icons8-github-48.png" alt="GitHubIcon">
                    <h2>GitHub</h2>
                </div>
                <div class="perfilGit" id="perfilGit">

                    <div onmouseenter="fetchGitHubReadme('thepokenik', 'thepokenik')" id="judeuRepos">
                        <a href="https://github.com/thepokenik" target="_blank">
                            <img src="assets/judas.png" alt="">
                            <span>Nikolas Melo</span>
                        </a>
                    </div>

                    <div id="ryanRepos">
                        <a onmouseenter="fetchGitHubReadme('RyanGustavoGoncalves', 'RyanGustavoGoncalves')" href="https://github.com/RyanGustavoGoncalves" target="_blank">
                            <img src="assets/SP-Studio.png" alt="">
                            <span>Ryan Gonçalves</span>
                        </a>
                    </div>

                    <div id="bigodeRepos">
                        <a onmouseenter="fetchGitHubReadme('lonelykkj', 'lonelykkj')" href="https://github.com/lonelykkj" target="_blank">
                            <img src="assets/bigode.png" alt="">
                            <span>Heitor Morales</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="messageBoxLkd" id="messageBoxLkd">
                <div class="txtsBoxSpamLkd">
                    <img src="assets/icons8-linkedin-50.png" alt="GitHubIcon">
                    <h2>Linkedin</h2>
                </div>
                
                <div class="perfilGit" id="perfilGit">

                    <div onmouseenter="fetchGitHubReadme('thepokenik', 'thepokenik')" id="judeuRepos">
                        <a href="https://github.com/thepokenik" target="_blank"> 
                            <img src="assets/judas.png" alt="">
                            <span>Nikolas Melo</span>
                        </a>
                    </div>

                    <div id="ryanRepos">
                        <a onmouseenter="fetchGitHubReadme('RyanGustavoGoncalves', 'RyanGustavoGoncalves')" href="www.linkedin.com/in/ryan-gustavo-97275226b" target="_blank">
                            <img src="assets/SP-Studio.png" alt="">
                            <span>Ryan Gonçalves</span>
                        </a>
                    </div>

                    <div id="bigodeRepos">
                        <a onmouseenter="fetchGitHubReadme('lonelykkj', 'lonelykkj')" href="https://github.com/lonelykkj" target="_blank">
                            <img src="assets/bigode.png" alt="">
                            <span>Heitor Morales</span>
                        </a>
                    </div>
                </div>
            </div>

            <div id="modal"></div>
    </main>
    <footer>
      <div class="logoEtec">
        <img src="assets/logo-etec.png" alt="etecIlzaPintus" />
      </div>
      <div>
        <h2>Projeto Programação Web ®</h2>
        <br />
        <span>Profº Claudinei</span>
      </div>
      <div class="footerInf">
        <ul>
          <a href="../sobre/sobre.html" target="_blank">
            <li>Sobre o projeto</li>
          </a>
          <br />
          <a href="https://www.etecsjcampos.com.br" target="_blank">
            <li>Nossa instituição</li>
          </a>
        </ul>
      </div>
      <div class="footerSoc">
        <ul>
          <li onclick="showMessageModal(true, messageBox)" class="gitHub">
            GitHub
          </li>
          <li onclick="showMessageModal(true, messageBoxLkd)">Linkedin</li>
        </ul>
      </div>
    </footer>
    <script src="components/scripts/script.js"></script>
  </body>
</html>