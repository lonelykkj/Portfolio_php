<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylephp.css">
  <title>Apresentação curricular</title>
</head>
<body>
  
</body>
</html>
<?php
if (isset($_POST["Curriculo1"])) {
    echo " 
    <table align=center>
    <tr>
      <td>
          Curriculo
          <img src=images/tomtom.webp width=300 height=300>
          </td>
          <td>
          Nome: Tomas da Silva<br>
          Idade: 21<br>
          Curso: Informática<br>
          Altura: 1,56<br>
          Descrição: Estudou na etec SJC no curso de informática,<br> 
          possui facilidade em design e programação pra Web e experiência com animais.
          </td>
          </tr>
         </table>";
} if (isset($_POST["Curriculo2"])) {
    echo "
    <table align=center>
       <tr>
         <td>
            Curriculo
           <img src=images/jesse.webp width=300 height=300>
         </td>
         <td>
           Nome: Jesse das Rosas<br>
           Idade: 28<br>
           Curso: Química<br>
           Altura: 1,76 <br>
           Descrição: Fez graduação em Química,<br> 
           possui facilidade em química e farmacêuticos e para área de biológicas.
         </td>
         </tr>
         </table>";
} if (isset($_POST["Curriculo3"])) {
    echo "
    <table align=center>
       <tr>
         <td>
           Curriculo
           <img src=images/jessica.jpg width=300 height=300>
         </td>
         <td>
           Nome: Jessica Batista<br>
           Idade: 25<br>
           Curso: Administração<br>
           Altura: 1,66<br>
           Descrição: Estudou administração na UNIP,<br> possui facilidade
           em conversação e experiência em gestão de empresas.
         </td>
         </tr>
         </table>";
} if (isset($_POST["Curriculo4"])) {
    echo "
    <table align=center>
       <tr>
         <td>
            Curriculo
           <img src=images/seila.jpg width=300 height=300>
         </td>
         <td>
           Nome: Antonio Oliveira Aragão<br>
           Idade: 42<br>
           Curso: Mecatrônica<br>
           Altura: 1,78<br>
           Descrição: Estudou no SENAI no curso de Mecatrônica,<br> 
           possui experiência em mecânica.
         </td>
         </tr>
         </table>";
}
?>
