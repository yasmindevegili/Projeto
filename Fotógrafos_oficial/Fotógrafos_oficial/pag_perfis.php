<!DOCTYPE html>

<?php
  session_start();

  require_once('config.php');
  
  
?>

<html>
<title>Help! Fotógrafos</title>
<meta charset="UTF-8">
<link rel="icon" type="imagem/png" href="camera_preta.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link href="w3.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="w3.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

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
        <li><a href="#"><img src="logo/Help!.jpg"></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="perfil.php"><?php print $_SESSION['nome_usuario'] ?></a></li>
        <li><a href="logout.php">SAIR</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1000px">
<br>
<br>
<br>
<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>ENCONTRE O FOTÓGRAFO IDEAL</b></h1>
  <p>A um clique de <span class="w3-tag">distância</span></p>
</header>

<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="imagens/cat.jpg" alt="Nature" style="width:100%">
    <div class="w3-container">
      <h3><b> Walter Firmo </b></h3>
      <h5>São Paulo - SP <span class="w3-opacity">41 anos</span></h5>
    </div>

    <div class="w3-container">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a href="perfil.php" button class="w3-button w3-padding-large w3-white w3-border"><b>VER PERFIL &raquo;</b></button></a></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Curtidas &nbsp;</b> <span class="w3-tag">130</span></span></p>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="imagens/flor.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
      <h3><b>Elisa Dumont</b></h3>
      <h5>Fortaleza - CE <span class="w3-opacity">39 anos</span></h5>
    </div>

    <div class="w3-container">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><button class="w3-button w3-padding-large w3-white w3-border"><b>VER PERFIL &raquo;</b></button></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Curtidas &nbsp;</b> <span class="w3-tag">82</span></span></p>
        </div>
      </div>
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
    <div class="w3-container w3-white">
      <h4><b>Clique no perfil e veja o portifólio de cada fotógrafo.</b></h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div><hr>
  
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Fotógrafos mais populares</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="perfil/walter1.jpg" alt="Image" class="w3-left w3-margin-right" style="width:60px">
        <span class="w3-large">Walter Firmo</span><br>
        <span>Joinville</span>
      </li>
      <li class="w3-padding-16">
        <img src="perfil/Annie.jpg" alt="Image" class="w3-left w3-margin-right" style="width:60px">
        <span class="w3-large">Annie Leibovitz</span><br>
        <span>Curitiba</span>
      </li> 
      <li class="w3-padding-16">
        <img src="perfil/sebastiao.jpg" alt="Image" class="w3-left w3-margin-right" style="width:60px">
        <span class="w3-large">Sebastião Salgado</span><br>
        <span>Imbituba</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="perfil/maureen.jpg" alt="Image" class="w3-left w3-margin-right" style="width:60px">
        <span class="w3-large">Maureen Bisilliat</span><br>
        <span>Cascavel</span>
      </li>  
    </ul>
  </div>
  <hr> 
  
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

</body>
</html>