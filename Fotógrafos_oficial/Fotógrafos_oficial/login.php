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
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<style>
.collapse{
    box-sizing: border-box;
    width: 90%;
  }
  </style>

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

    	<div class="loginbox">
    	<h1>Login aqui</h1>

<?php
require_once('config.php');

try {
  if (isset($_POST['submit'])) {
    $query = 'SELECT nome_completo, email, cod_tipo FROM usuario WHERE nome_usuario=:usuario AND senha=:senha';

    $submitData = $connection -> prepare($query);

    $nomeUsuario = isset($_POST['nome_usuario']) ? trim(strip_tags(htmlspecialchars($_POST['nome_usuario']))) : '';
    $senha = isset($_POST['senha']) ? trim(strip_tags(htmlspecialchars($_POST['senha']))) : '';

    $submitData -> bindValue(':usuario', $nomeUsuario);
    $submitData -> bindValue(':senha', $senha);


    // executa a query
    $submitData -> execute();

    // conta a quantidade de linhas que foi atingida
    $userAmount = $submitData -> rowCount();
    
    // usa o fetch para pegar todos os usuários com dados correspondentes
    $user = $submitData -> fetch(PDO::FETCH_ASSOC);

    if ($userAmount > 0) {
      session_start();

      $_SESSION['isLogged'] = true;
      $_SESSION['nome_usuario'] = $user['nome_usuario'];
      $_SESSION['email'] = $user['email'];
      
      $cod_tipo = $user['cod_tipo'];

      header('Location: pag_perfis.php');
    } else {
      print "<p>Usuário não cadastrado</p>";
    }
  }
} catch (PDOException $error) {
  print 'Conexão falhou! ' . $error -> getMessage();
}
?>

    	<form action="login_process.php" method="post">
    		<p>Nome de Usuário</p>
    		<input type="text" name="nome_usuario" placeholder="Digite seu nome de usuário" required="">
    		<p>Senha</p>
    		<input type="password" name="senha" placeholder="Digite sua senha" required="">
    		<input type="submit" name="submit" value="Login">
    		<a href="#">Perdeu sua senha?</a><br>
    		<a href="cadastroCliente.php">Não tem uma conta?</a>
    	</div>
    	</div>
    </body>
</html>


    
    
