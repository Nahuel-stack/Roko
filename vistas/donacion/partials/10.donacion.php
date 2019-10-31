<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
				<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
						 
						 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							 <span class="navbar-toggler-icon"></span>
						 </button> <a class="navbar-brand" href="index.php">ROKO</a>
						 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							 <ul class="navbar-nav">
								 
								 <li class="nav-item dropdown">
									  <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">perdidos</a>
									 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
										  <a class="dropdown-item" href="02.ver.perros.perdidos.php" id="navbarDropdownMenuLink">Ver Perdidos</a>
										 <div class="dropdown-divider">
										 </div>
										 <a class="dropdown-item" href="03.publicar.perdidos.php" id="navbarDropdownMenuLink">Publicar</a>
									 </div>
								 </li>
 
								 <li class="nav-item dropdown">
									  <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Encontrados</a>
									 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
										  <a class="dropdown-item" href="04.ver.perros.encontrados.php" id="navbarDropdownMenuLink">Ver Encontrados</a>
										 <div class="dropdown-divider">
										 </div>
										 <a class="dropdown-item" href="05.publicar.encontrados.php" id="navbarDropdownMenuLink">Publicar</a>
									 </div>
								 </li>
 
								 <li class="nav-item dropdown">
									  <a class="nav-link " href="06.ver.perros.para.adoptar.php">Ver Mascotas para adoptar</a>
								 </li>
 
								 <li class="nav-item dropdown">
									  <a class="nav-link " href="07.dar.en.adopcion.php">Dar en adopcion</a>
								 </li>
 
							 </ul>
							 <form class="form-inline">
								 <input class="form-control mr-sm-2" type="text"> 
								 <button class="btn btn-primary my-2 my-sm-0" type="submit">
									 Buscar
								 </button>
							 </form>
							 <ul class="navbar-nav ml-md-auto">
								 <li class="nav-item dropdown">
									 <?php
										 if (isset($_SESSION["mail"])) {
									 
									 ?>
									 <a a class="nav-link" href="10.donacion.php"><?php echo $_SESSION["mail"];?></a>
									 <?php
										 } else {
									 ?>
									 <a a class="nav-link" href="10.donacion.php">Hacer Donacion</a>
									 <?php
										 }
									 ?>	
								 </li>
								 <li class="nav-item dropdown">
									 <a a class="nav-link" href="11.ver.mis.anuncios.php">Ver mis Anuncios</a>	
								 </li>
								 <li class="nav-item dropdown">
									 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Mi cuenta</a>
									 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
										  <a class="dropdown-item" href="08.login.php">Ingresar</a>
										  <a class="dropdown-item" href="09.registro.php">Registrarse</a>
									 </div>
								 </li>
								 <li class="nav-item dropdown">
									 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Español</a>
									 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
										  <a class="dropdown-item" href="">Ingles</a>
										  <a class="dropdown-item" href="">Portugues</a>
									 </div>
								 </li>
							 </ul>
						 </div>
					 </nav>
				</div>
			</div>
	<div class="row">
		<div class="col-md-12">
			<h3>
				Publicar un Perdido
			</h3>
			<form role="form">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						¿Donde has perdido a tu perro?
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52575.72649040787!2d-58.771324640961815!3d-34.553988200767414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcbd7f8ed7ed6f%3A0xa141f13ddb761d51!2sSan%20Miguel%2C%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1570512578806!5m2!1ses-419!2sar" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				<div class="form-group"> 
					<label for="exampleInputPassword1">
						¿Como lo has perdido?
					</label>
					<input type="password" class="form-control" id="exampleInputPassword1">
				</div>
				<div class="form-group"> 
					<label for="exampleInputPassword1">
						Fecha de desaparicion
					</label>
					<input type="password" class="form-control" id="exampleInputPassword1">
				</div>
				<!- -->
				<div class="form-group"> 
					<label for="exampleInputPassword1">
						Mas informacion sobre tu perro
					</label>
					<input type="password" class="form-control" id="exampleInputPassword1">
				</div>
				<div class="form-group"> 
					<label for="animal">
						Animal
					</label>
					<br>
					<input id="animal" type="radio" name="animal" value="male"> Perro<br>
					<input id="animal" type="radio" name="animal" value="female"> Gato<br>
					<input id="animal" type="radio" name="animal" value="female"> Otro<br>
				</div>
				<div class="form-group"> 
					<label for="gender">
						Genero
					</label>
					<br>
					<input id="gender" type="radio" name="gender" value="male"> Macho<br>
					<input id="gender" type="radio" name="gender" value="female"> Hembra<br>
				</div>
				<div class="form-group"> 
					<label for="castrado">
						Castrado
					</label>
					<br>
					<input id="castrado" type="radio" name="castrado" value="yes"> Si<br>
					<input id="castrado" type="radio" name="castrado" value="no"> No<br>
				</div>
				<div class="form-group">
					 
					<label for="exampleInputFile">
						Cargar Imagen
					</label>
					<input type="file" class="form-control-file" id="exampleInputFile">
					<br>
					<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg">
					<p class="help-block">
						Example block-level help text here.
					</p>
				</div>
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		</div>
		</div>
				<footer class="pt-4 my-md-5 pt-md-5 border-top">
			    <div class="row">
			      <div class="col-12 col-md">
			        <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
			        <small class="d-block mb-3 text-muted">&copy;Nahuel Mansilla 2019</small>
			      </div>
			      <div class="col-6 col-md">
			        <h5>Seguinos</h5>
			        <ul class="list-unstyled text-small">
			          <li><a class="text-muted" href="#">Facebook</a></li>
			          <li><a class="text-muted" href="#">Instagram</a></li>
			          <li><a class="text-muted" href="#">Twitter</a></li>
			          <li><a class="text-muted" href="#">Youtube</a></li>
			          <li><a class="text-muted" href="#">linkedin</a></li>
			          <li><a class="text-muted" href="#">Gmail</a></li>
			          <li><a class="text-muted" href="#">Wsp</a></li>
			        </ul>
			      </div>
			      <div class="col-6 col-md">
			        <h5>Preguntas Frecuentes</h5>
			        <ul class="list-unstyled text-small">
			          <li><a class="text-muted" href="#">¿Como funciona?
			          	<!-- Gracias a nuestra base de datos, somos capaces de poner en contacto a las personas que encontraron un perro perdido con sus dueños. Por ahora hace falta visitar la pagina de vez en cuando, porque no hay todavia sistema de alarma automático. A veces se encuentran mascotas meces después de su desaparición! --></a></li>
			          <li><a class="text-muted" href="#">¿Porque esta pagina?
			          	<!-- Hemos creado esta pagina para ayudar a la gente a encontrar sus mascotas perdidas y especialmente los perros perdidos. Esperamos que os sea util. Nos encontramos una vez en esta situación y hubiesemos deseado que esta pagina existiese ya. Y por eso mismo decidimos crearla! --></a></li>
			          <li><a class="text-muted" href="#">¿Es realmente Gratis?</a></li>
			        </ul>
			      </div>
			      <div class="col-6 col-md">
			        <h5>¿Quienes somos?
			        	<!-- No te preocupes, no tendras obligación de pagar nada para usar esta pagina :) Aqui cada uno aporta lo que crea conveniente! Si quieres colaborar para que este servicio se mantenga activo por mucho tiempo, ayudandonos a financiar los costes y la implicación que la pagina requiere (servidores, dominio, tiempo y esfuerzo), no dudes en hacer una donación :)--></h5>
			        <ul class="list-unstyled text-small">
			          <li><a><strong>Roko</strong></a></li>
			          <li><a class="text-muted" href="#">Mision 
			          	<!-- Ser la herramienta para la conexion entre una mascota perdida y su dueño --> </a></li>
			          <li><a class="text-muted" href="#">Vision 
			          	<!-- Ser web. Lider en este indole --> </a></li>
			          <li><a class="text-muted" href="#">Objetivo <!-- Efectividad del 80% --> </a></li>
			        </ul>
			      </div>
			    </div>
			    </div>
			  </footer>
			 </div>
	</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>