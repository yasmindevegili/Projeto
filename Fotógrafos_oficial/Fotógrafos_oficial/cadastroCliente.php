<!DOCTYPE html>
<html>
<head>
    <title>Help! Fotógrafos</title>
    <meta charset="utf-8">
    <link rel="icon" type="imagem/png" href="camera_preta.png"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="w3.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="cadastroCliente.css">
</head>
<style>
  .collapse{
  box-sizing: border-box;
  width: 90%;
}
      </style>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <href="#myPage"><class="logo">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="w3.html"><img src="logo/Help!.jpg"></a></li>
      </ul>
    </div>
  </div>
</nav>
    <?php $cod_tipo = is_integer($POST['cod_tipo']) ?>
    <div class="loginbox">
    <h1>Cadastre-se</h1>
    <form action="cadastrocli_process.php" method="post">
    
            <p>Nome de usuário</p>
            <input type="text" name="nome_usuario" placeholder="Digite um nome de usuário" required="">
            <p>Nome Completo</p>
            <input type="text" name="nome_completo" placeholder="Digite seu nome completo" required="">
            <input type="radio" name="cod_tipo" value="3">
            <label for="cod_tipo"  <?php echo ($cod_tipo == "Cliente" ? "checked" : null) ?> >Cliente</label><br>
            <input type="radio" name="cod_tipo" value="2">
            <label for="cod_tipo" <?php echo ($cod_tipo == "Fotógrafo" ? "checked" : null) ?>>Fotógrafo</label><br>
            <p>E-mail</p>
            <input type="email" name="email" placeholder="@gmail.com" required="">
            <p>Senha</p>
            <input type="password" name="senha" placeholder="Digite sua nova senha" required="">
            <p>Confirmar Senha</p>
            <input type="password" name="senha" placeholder="Confirme sua senha" required="">
            <a href="login.php">Já tem uma conta?</a>
            <p></p>
            <br>



    <p class="botao">
    <input type="submit" name="enviar" value="Enviar"/>
    </p>

    </form>
    </div>
</body>
</html>