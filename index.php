<!DOCTYPE html>
<html>
	<head>
		<title>Worldshop</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel= "stylesheet" type= "text/css" href= "estilo.css">
		<link rel="icon" type="ico" href="img/favicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>	
  <body>
	  <?php ?>
	  <header >
      <section class="barra-top ">
        <p>info@worldshop.com</p>
        <ul class="menu-ctn"  >
          <li id="menu" style="color:white"; >
            Mi cuenta
            <ul id="dropdown">
              <li  data-toggle="modal" data-target="#exampleModal1">Iniciar Sesión</li>
              <li data-toggle="modal" data-target="#exampleModal2">Crear Cuenta</li>
            </ul>
          </li>
        </ul>
      </section>
      <!--primer encuesta-->
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
              <form name="formulario" method="get">
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
                <button style="margin-left: 85%"; id="alerta" type="submit" class="btn btn-danger">Aceptar</button>
              </form>
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
                    <input type="email" class="form-control" id="inputEmail4" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Contraseña</label>
                    <input required="" type="password" class="form-control" id="inputPassword4">
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
              <button type="button" class="btn btn-danger">Enviar</button>
            </div>
          </div>
        </div>
      </div>
      <!--menu-->
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <a href="index.html"><img  class="logo" src="img/Logo.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls=" navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span style="background-color:white;" class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul   class="navbar-nav">         
              <li class="nav-item active ">
               <a style="color:white"; class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a style="color:white" class="nav-link" href="nosotros.html">Nosotros </a>
              </li>
               <li class="nav-item">
                <a  style="color:white" class="nav-link" href="contacto.html">Contáctenos</a>
              </li>
              <li class="nav-item">
                <a  style="color:white" class="nav-link" href="mujer.html">Mujer</a>
              </li> 
              <li class="nav-item">
                <a  style="color:white" class="nav-link" href="hombre.html">Hombre</a>
              </li> 
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="Buscar" placeholder="Search" aria-label="Search ">
                <button class="btn  my-2 my-sm-0 navbar navbar-light btn-danger "type="submit" ><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor " xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/></svg></button>

              </form>
            </ul>
          </div>
        </nav>
      </div>   
 	  </header>
    <hr>
    <div class="row mx-1" >
      <div class="col" >
       
       <a href="hombre.html"> <img  src="img/hombre1.jpg"  width="100%"  id="imagenhombre1"></a>
      </div>
      <div class="col" >
       
       <a   href="mujer.html" > <img   src="img/mujer1.jpg" width="100%"   id="imagenmujer1"></a>
      </div>
    </div>

      
    <section>
	  	<div class="CallToAction">
        
        <div class="container-fluid ">
        <div class="row">
        <h1 class="p2 col-md-5 d-none d-md-block" >¿Quieres lucir con estilo?</h1>
       
          <div class="btn form-group  ">
            <a style="margin-left: 105px; margin-top: 25px;" onmouseenter="mouseEnter()" onmouseleave="mouseLeave()"  id="mover" class="btn btn-danger btn-lg "href="contacto.html">¡Contáctenos Ahora!</a>
        </div>
      </div>
      </div>
      </div>	
		</section><br>
		<!--pie de pagina-->
		<footer  style="background-color:black;"class="footer" >
      <section>
        <div class="divFooter"Style="margin-left:10%;">
          <img src="img/Logo.png"id="logo2">
        </div>
        <div class="row" >
      
        <div  class="btn  btn-lg ">
        <a style="color:white; " class="btn btn-default btn-lg"href="index.php">Inicio</button></a>
        <a style="color:white; " class="btn btn-default btn-lg"href="nosotros.html">Nosotros</button></a>
        <a style="color:white; " class="btn btn-default btn-lg"href="contacto.html">Contáctenos</button></a>
        <a style="color:white; " class="btn btn-default btn-lg"href="mujer.html">Mujer</button></a>
        <a style="color:white; " class="btn btn-default btn-lg"href="hombre.html">Hombre</button></a>
        </div>  
        <div Style="margin-left:25%;"%class="divFooter2 col-md-11">
          <a Style="font-family:bold;font-size:20px;color:white;">Siguenos En:</a><br>
          <a href="https://www.facebook.com/" target="_blank"><img src="img/facebook.png"></a>
          <a href="https://www.instagram.com/" target="_blank"><img src="img/instagram.png"></a>
          <a href="https://web.whatsapp.com/" target="_blank"><img src="img/whatsapp.png"></a>
          <a href="https://twitter.com/?lang=es" target="_blank"><img src="img/twitter.png"></a>
        </div>
        </div>
        </div>
        </div>
      </section>
      <br>  
      <br>
      <hr>
      <p style="color:white;">&copy; Copyrigh - Derechos reservados</p>
    </footer>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="
    sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/java.js"></script>
     <script type="text/javascript" src="js/script.js"></script>

  </body>
</html>
