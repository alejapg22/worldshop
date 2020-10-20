<!DOCTYPE html>
<html>
 	<head>
	  <title>worldshop</title>
	 	<meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
	 	<link rel= "stylesheet" type= "text/css" href= "estilo.css">
	 	<link rel="icon" type="ico" href="img/favicon.png">
	 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	</head>
	<body>
		<?php?>
		<header >
			<section class="barra-top ">
				<p>info@worldshop.com</p>
				<div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Mi cuenta</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
             	<a class="dropdown-item"  data-toggle="modal" data-target="#exampleModal1">Iniciar Sesión</a>
              <a class="dropdown-item"  data-toggle="modal" data-target="#exampleModal2">Crear Cuenta</a>
   					</div>
        </div>
      </section>
      <!--primer encuenta-->
      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModal1Label">Iniciar Sesión</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Direccion Email </label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Recordar contraseña</label>
                </div>
                <button type="submit" class="btn btn-primary">Aceptar</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>  
            </div>
          </div>
        </div>
      </div>
      <!--segunda encuesta-->
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModal2Label">Crear Cuenta</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Correo</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Contraseña</label>
                    <input type="password" class="form-control" id="inputPassword4">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="firtname">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="col">
                    <label for="firtname">Apellido</label>
                    <input type="text" class="form-control" placeholder="Apellidos">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Telefono</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="+57... celular o fijo">
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Direccion</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apart, studio ..etc">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Ciudad</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Sexo</label>
                    <select id="inputState" class="form-control">
                      <option selected>femenino</option>
                      <option>Masculino</option>
                      <option>Otro</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </div>
      </div>
			<!--menu-->
 			<div class="menu bg-light">
        <a href="prueba.php"><img  class="logo" src="img/Logo.png"></a>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls=" navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul   class="navbar-nav">         
              <li class="nav-item active ">
               <a style="color:black;"; class="nav-link" href="prueba.php">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a style="color:black"; class="nav-link" href="nosotros.html">Nosotros </a>
              </li>
               <li class="nav-item">
                <a  style="color:black"; class="nav-link" href="contacto.html">Contactenos</a>
              </li>
              <li class="nav-item">
                <a  style="color:black"; class="nav-link" href="mujer.html">Mujer</a>
              </li> 
              <li class="nav-item">
                <a  style="color:black"; class="nav-link" href="hombre.html">Hombre</a>
              </li> 
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="Buscar" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 navbar navbar-light"type="submit" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor " xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/></svg></button>
                <button href="#" class="carrito"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/></svg></button>
              </form>
            </ul>
          </div>
        </nav>
      </div>  
      <!--fin menu-->
 		</header>
    <br>
		<div class="row">
      <div class="col">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <a href="hombre.html" >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/hombre1.jpg" class="d-block w-100" >
            </div>
  	        <div class="carousel-item">
              <img  src="img/hombre2.jpg" class="d-block w-100" >
            </div>
            <div class="carousel-item">
              <img src="img/hombre3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img/hombre4.jpg" class="d-block w-100">
            </div>
  	        <div class="carousel-item">
              <img src="img/hombre5.jpg" class="d-block w-100" >
            </div>
  	        <div class="carousel-item">
              <img src="img/hombre6.jpg" class="d-block w-100" >
            </div>
  	        <div class="carousel-item">
              <img src="img/hombre7.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img/hombre8.jpg" class="d-block w-100" >
            </div>
          </div></a>
        </div>	
      </div>
      <div class="col">
        <div  id="carouselExamplelidesOnly" class="carousel slide" data-ride="carousel">
          <a href="mujer.html" >
          <div class="carousel-inner" >
            <div class="carousel-item active">
              <img src="img/mujer1.jpg" class="d-block w-100">
            </div>
	          <div class="carousel-item">
              <img  src="img/mujer2.jpg" class="d-block w-100"  >
            </div>
            <div class="carousel-item">
              <img src="img/mujer3.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
              <img src="img/mujer4.jpg" class="d-block w-100" >
            </div>
	          <div class="carousel-item">
              <img src="img/mujer5.jpg" class="d-block w-100" >
            </div>
	          <div class="carousel-item">
              <img src="img/mujer6.jpg" class="d-block w-100">
            </div>
	          <div class="carousel-item">
              <img src="img/mujer7.jpg" class="d-block w-100" >
            </div>
            <div class="carousel-item">
              <img src="img/mujer8.jpg" class="d-block w-100" >
            </div>
          </div></a>
        </div>	
      </div>
    </div>
    <section>
	   	<div class="CallToAction">
	    	<h1 class="p2">¿Quieres lucir con estilo?</h1>
       <div class="row">
         <div class="container-fluid">
          <div class="btn form-group ">
            <a style="margin-top: 15%;"class="btn btn-danger btn-lg "href="contacto.html">¡Contactenos Ahora!</button></a>
        </div>
      </div>
      </div>
      </div>	
		</section><br>
		<!--pie de pagina-->
		<footer class="footer">
			<section>
				<div class="divFooter">
					<img src="img/Logo.png">
				</div>
        <div class="row">
				<div class="container-fluid">
        <div class="btn form-group ">
        <a class="btn btn-default btn-lg"href="prueba.php">Inicio</button></a>
        <a class="btn btn-default btn-lg"href="nosotros.html">Nosotros</button></a>
        <a class="btn btn-default btn-lg"href="contacto.html">Contactenos</button></a>
        <a class="btn btn-default btn-lg"href="mujer.html">Mujer</button></a>
        <a class="btn btn-default btn-lg"href="hombre.html">Hombre</button></a>
        </div>  
        <div Style="margin-left:25%;"%class="divFooter col-md-11">
          <a href="https://www.facebook.com/" target="_blank"><img src="img/facebook.png"></a>
          <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram.png"></a>
          <a href="https://web.whatsapp.com/" target="_blank"><img src="img/whatsapp.png"></a>
          <a href="https://twitter.com/?lang=es" target="_blank"><img src="img/twitter.png"></a>
        </div>
        </div>
        </div>
        </div>
      </section><br><hr >
			<p>&copy; Copyrigh - Derechos reservados</p>
		</footer>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="
    sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>