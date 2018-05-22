<!DOCTYPE html>
<html lang="pt-br" >

<head>
  <meta charset="UTF-8">
  <title>Sideon</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  
<?php

echo "<h1>Sideo tenologia</h1>"


?>
<div class="container">
  <div class="info">
    <h1>Sideon</h1>
  </div>
</div>


<div class="form">
  <div class="thumbnail"><img src="images/sideon.jpg" height="100%" width="100%"></div>

  <!-- Formulario de Login -->
  <form class="login-form">
    <input type="email" class="form-control-plaintext" placeholder="E-mail"/>
    <input type="password" placeholder="Senha"/>
    <input type="submit" class="btn btn-primary" value="Entrar">
    <p class="message">Não estar Cadastrado? <a href="#">crie sua conta</a></p>
  </form>

<!-- Formulario de Cadastro -->
  <form class="register-form">
    <input type="text" placeholder="Nome completo"/>
     <input type="email" placeholder="E-mail"/>
    <input type="password" placeholder="senha"/>

    <input type="submit" class="btn btn-primary" value="Cria sua conta">
    <p class="message">se já é cadastrado click em <a href="#">Logar</a></p>
  </form>

</div>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>

</body>

</html>
