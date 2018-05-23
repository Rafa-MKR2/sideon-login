<!DOCTYPE html>
<html lang="pt-br" >

<head>
  <meta charset="UTF-8">
  <title>Sideon</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  

<div class="container">
  <div class="info">
    <h1>Sideon</h1>
  </div>
</div>




<div class="form">

  <div class="thumbnail"><img src="images/sideon.jpg" height="100%" width="100%"></div>

 
  <!-- Formulario de Login -->
  <form class="login-form" method="POST">

    <input type="email" class="form-control" placeholder="E-mail"  required />
    <input type="password" placeholder="Senha" class="form-control" required/>
    <button type="submit" class="btn btn-primary "> Entrar </button> 
        <p class="message">Não possui conta? <a href="#">Cadastre-se</a></p>

  </form>

<!-- Formulario de Cadastro -->
  <form class="register-form" method="POST">

    <input type="text" placeholder="Nome completo" class="form-control" required/>
     <input type="email" placeholder="E-mail" class="form-control" required/>
    <input type="password" placeholder="senha" class="form-control" required/>
  
    <button type="submit" class="btn btn-primary"> Cadastre-se </button> 
  
    <p class="message">voltar ao <a href="#">Login</a></p>
  </form>


</div>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>

</body>

</html>
