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
          <a id="logo-container" href="#" class="brand-logo"><a href="index.html"><img src="imagens/logo.png" width="80"></a></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#secaoForum">Fórum</a></li>
            <li><a href="#secaoFrases">Frases</a></li>
            <li><a href="#secaoDoacoes">Doações</a></li>
            <li><a href="#secaoEmocoes">Minhas Emoções</a></li>
            <li><a href="#secaoParceiros">Parceiros</a></li>
            <li><a href="#secaoNos">Sobre Nós</a></li>
            <li> <a href="Cadastrar.php">Cadastrar </a></li>
            <li> <a href="Login.php">Login </a></li>
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


<!-- FORMULARIO -->
		<div class="row container">
			<p>&nbsp;</p>
			<form action="banco_de_dados/create.php" method="post" class="col s12">
				<fieldset class="formulario" style="padding:15px;margin-bottom: 50px;">
					
					<h5 class="light center">Cadastro</h5>
					<?php 
						if (isset($_SESSION['erro_Us'])):
							echo $_SESSION['erro_Us'];
							unset($_SESSION['erro_Us']);
						endif;
					?>
					<!-- CAMPO NOME -->
					<div class="input-field col s6">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="nome" id="nome" maxlength="40" required autofocus>
						<label for="nome">Nome</label>
					</div>
					<!-- CAMPO EMAIL -->
					<div class="input-field col s6">
						<i class="material-icons prefix">email</i>
						<input type="email" name="email"id="email" maxlength="40" required>
						<label for="email">Email</label>
					</div>
					<!-- CAMPO SENHA -->
					<div class="input-field col s6">
						<i class="material-icons prefix">https</i>
						<input type="password" name="senha" id="senha" maxlength="16" required>
						<label for="Senha">Senha</label>
					</div>
					<!-- CAMOO CONFSENHA -->
					<div class="input-field col s6">
						<i class="material-icons prefix">https</i>
						<input type="password" name="confsenha" id="confsenha" maxlength="16" required>
						<label for="Confirmar Senha">Confirmar Senha</label>
					</div>
					<!-- CAMPO CEP -->
					 <div class="input-field col s6">
					 	<i class="material-icons prefix">map</i>
					 	<input type="text" name="cep" id="cep" maxlength="40" required onblur="pesquisacep(this.value);">
					 	<label for="Cep">CEP</label>
					 </div>
					 <!-- CAMPO RUA -->
					 <div class="input-field col s6">
					 	<i class="material-icons prefix">add_location_alt</i>
					 	<input type="text" name="rua" id="rua" maxlength="40" required>
						<label for="Rua">Rua</label>
					 </div>
					 <!-- CAMPO BAIRRO -->
					 <div class="input-field col s6">
					 	<i class="material-icons prefix">add_location_alt</i>
					 	<input type="text" name="bairro" id="bairro" maxlength="40" required>
					 	<label for="Bairro">Bairro</label>
					 </div>
					 <!-- CAMPO ESTADO -->
					 <div class="input-field col s6">
					 	<i class="material-icons prefix">map</i>
					 	<input type="text" name="uf" id="uf" maxlength="40" required>
					 	<label for="uf">Estado</label>
					 </div>
					 <!-- CAMPO CIDADE -->
					 <div class="input-field col s12">
					 	<i class="material-icons prefix">map</i>
					 	<input type="text" name="cidade" id="cidade" maxlength="40" required>
					 	<label for="Cidade">Cidade</label>
					 </div>
					 <!-- BOTOES -->
					<div class="input-field col s12">
						<input type="submit" value="cadastrar" class="btn-large waves-light teal lighten-1">
						<input type="reset" value="limpar" class="btn-large  waves-light red lighten-2">
					</div>
				</fieldset>
			</form> 
		</div>
<?php 
  include_once 'includes/footerHome.php';
?>