<html>
<title> Cadastrar </title>
<head> 
  <link rel="icon"
        type="logo.png"
        href="logo.png">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
     <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
   <script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<header>
  <div class="navbar-fixed">  
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#" class="brand-logo"><a href="index.html"><img src="imagens/logo.png" width="80"></a> </a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#secaoForum">Fórum</a></li>
            <li><a href="#secaoFrases">Frases</a></li>
            <li><a href="#secaoDoacoes">Doações</a></li>
            <li><a href="#secaoEmocoes">Minhas Emoções</a></li>
            <li><a href="#secaoParceiros">Parceiros</a></li>
            <li><a href="#secaoNos">Sobre Nós</a></li>
            <li> <a href="Cadastrar.php">Cadastrar </a></li>
            <li><a href="Login.php">Login</a></li>
  </ul>
  
        <ul id="nav-mobile" class="sidenav">
            <li><a href="#secaoForum">Fórum</a></li>
            <li><a href="#secaoFrases">Frases</a></li>
            <li><a href="#secaoDoacoes">Doações</a></li>
            <li><a href="#secaoEmocoes">Minhas Emoções</a></li>
            <li><a href="#secaoParceiros">Parceiros</a></li>
            <li><a href="#secaoNos">Sobre Nós</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
  </div>
</header>
<br>
<br>
<p>

<!-- FORMULARIO -->
  <div class="row container">
  
    <form action="loginLogica.php" method="post" class="col s12">
      <fieldset class="formulario" style="margin-top:5px;margin-bottom: 50px;">
    
        <h5 class="light center" style="font-size: 55px;margin-bottom:5%;font-weight: normal;">LOGIN</h5>
        <center>
        <?php 
          if (isset($_SESSION['erro_login'])):
            echo $_SESSION['erro_login'];
            session_unset();
          endif;?>
        <!-- CAMPO EMAIL -->
        <div class="input-field col s6 offset-s3">
          <i class="material-icons prefix">email</i>
          <input type="email" name="login"id="login" maxlength="40" required>
          <label for="email">Login</label>
        </div>
        <p></p>
        <!-- CAMPO SENHA -->
        <div class="input-field col s6 offset-s3 ">
          <i class="material-icons prefix">https</i>
          <input type="password" name="senha" id="senha" maxlength="16" required>
          <label for="Senha">Senha</label>
        </div>
        <!-- BOTOES -->
          <div class="input-field col s12 light center" style="margin-top: 40px;">
            <input type="submit" value="Entrar" class="btn teal ligthen-1  waves-light btn-large white-text">
          </div>
        </center>
      </fieldset>
    </form>
  </div>
  <?php 
     include_once 'includes/footerHome.php';
?>
