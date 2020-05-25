<?php
session_start();
include('db.php');
// compruebo si el valor de la superglobal SESSION está vacío
if (empty($_SESSION['correo'])) {
  // si no existe ningun valor asignado a la variable correo, dejamos la variable vacía, para más tarde comprobar en caso de que sea así mostrar Login.
  $correo="";
}
else {
  //En caso contrario , si hay una sesión activa, asignamos el valor de la superglobal SESSION a la variable $correo. Para mostrar Logout
  $correo=$_SESSION['correo'];
 }
  ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--Título de la página web.  -->
    <title>Shisha Time.</title>
  <!--Aquí hacemos referencia a todo lo relacionado con el código css y efectos. -->
  <!--En la siguiente línea de código establecemos la imagen  que aparecerá en el navegador. -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/niceselect.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl-carousel.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
</head>
<body class="js">
		<!-- Cabecera -->
    <header class="header shop v3">
  		<!-- Vamos a crear un primer contenedor que contenga información como teléfono y email de la tienda por una parte , la parte central estará vacía y el parte derecha
    se encontrará la dirección de la tienda y los botones de "Mi cuenta" y "Login" a estos tres últimos elementos le añadiremos un pequeño icono para estilizarlo. -->
  		<div class="topbar">
  			<div class="container">
  				<div class="inner-content">
  					<div class="row">
  						<div class="col-lg-4 col-md-12 col-12">
  							<!-- Parte izquierda de la cabecera. -->
  							<div class="top-left">
  								<ul class="list-main">
                    <!--Aquí añadimos el número y el correo. -->
  									<li><i class="ti-headphone-alt"></i> +34 651093926</li>
  									<li><i class="ti-email"></i> goshishatime@gmail.com</li>
  								</ul>
  							</div>
  						</div>
              <div class="col-lg-8 col-md-12 col-12">
                <!-- Parte derecha de la cabecera. -->
                <div class="right-content">
                  <ul class="list-main">
                    <li><i class="ti-location-pin"></i> C/ Villar 1 Madrid</li>
                    <li><i class="ti-user"></i><a href="panel-control.php">Mi cuenta.</a></li>
                      <?php
                      //Comprobamos si la variable correo que hemos definido en la parte inicial del archivo está vacía.
                      if (empty($correo)) {
                        //si está vacía mostramos
                      echo( '<li><i class="ti-power-off"></i><a href="login.html">Login</a></li>');
                      }
                      else {
                        echo ('<li><i class="ti-power-off"></i><a href="logout.php">Logout</a></li>');
                        }
                        ?>
                  </ul>
                </div>
              </div>
  					</div>
  				</div>
  			</div>
  		</div>
      <!--En esta parte , crearemos una segunda sección superior en la web. -->
  		<div class="middle-inner">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-2 col-md-2 col-12">
  						<!-- Aquí insertaremos el logo arriba a la izquierda.  -->
  						<div class="logo">
                <!-- Al pulsar en el logo , crearemos una referencia que nos lleve a index.html -->
  							<a href="index.html"><img src="images/shishatime.png" alt="logo"></a>
  						</div>
  						<!-- Form de búsqueda.-->
  						<div class="search-top">
  							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
  							<div class="search-top">
  								<form class="search-form">
  									<input type="text" placeholder="Search here..." name="search">
  									<button value="search" type="submit"><i class="ti-search"></i></button>
  								</form>
  							</div>
  						</div>

  						<div class="mobile-nav"></div>
  					</div>
            <!--A continuación vamos a crear un sistema de búsqueda en el que el usuario podrá seleccionar la categoría en la que buscar-->
            <div class="col-lg-8 col-md-7 col-12">
  						<div class="search-bar-top">
  							<div class="search-bar">
                  <!--Form de búsqueda -->

                  <!--Vamos a crear un form para que al pulsar en el boton realizaremos una búsqueda en la base de datos, en la tabla productos. -->
  								<form action="buscar.php" method="POST">
                    <input type="text" name="search">
  									<button class="btnn"><i class="ti-search"></i>
  								</form>
                  <!--Fin form de búsqueda -->



  							</div>
  						</div>
  					</div>
  					<div class="col-lg-2 col-md-3 col-12">
  						<div class="right-bar">
  							<div class="sinlge-bar">
  								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
  							</div>
  							<div class="sinlge-bar shopping">
                  <!--Añadir el número de items que hay en el carrito. -->
  								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count"></span></a>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="header-inner">
  			<div class="container">
  				<div class="cat-nav-head">
  					<div class="row">
  						<div class="col-12">
  							<div class="menu-area">
  								<!-- Menú principal de navegación. -->
                  <nav class="navbar navbar-expand-lg">
                    <div class="navbar-collapse">
                      <div class="nav-inner">
                        <ul class="nav main-menu menu navbar-nav">
                          <!-- Empleo la class = "active" para que cuando cargue la página , aparezca como seleccionada por defecto. -->
                          <li class="active"><a href="index.php">Inicio.</a></li>
                          <li ><a href="#">Productos.<i class="ti-angle-down"></i></a>
                          <ul class="dropdown">
                            <!--Opciones que están dentro de la categoría de productos. -->
                            <li><a href="cachimbas.php">Cachimbas.</a></li>
                            <li><a href="carbon.php">Carbones.</a></li>
                            <li><a href="mangueras.php">Mangueras.</a></li>
                            <li><a href="cazoletas.php">Cazoletas.</a></li>
                          </ul>
                          </li>
                          <li><a href="ofertas.php">Ofertas.</a></li>
                          <li><a href="pack.php">Packs.</a></li>
                          <li><a href="contacto.php">Contacto</a></li>
                        </ul>
                      </div>
                    </div>
                  </nav>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</header>
		<!--/ End Header -->

    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="bread-inner">
              <ul class="bread-list">
                <li><a href="index.html">Inicio<i class="ti-arrow-right"></i></a></li>
                <li class="active"><a href="registro.php">Registro</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

		<!-- Shop Login -->
		<section class="shop login section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-12">
						<div class="login-form">
							<h2>Alta usuario.</h2>
							<!-- Form para el registro de usuarios.-->

              <?php
              //incluimos el archivo donde se encuentran nuestros datos de conexion
               include 'conexion.php';
              // utilizamos el método POST para guardar las variables introducidas por el usuario en el formulario.
               $nombre = $_POST['nombre'];
               $apellidos = $_POST['apellidos'];
               $correo = $_POST['correo'];
               $direccion= $_POST['direccion'];
               $direccion2= $_POST['direccion2'];
               $ciudad= $_POST['ciudad'];
               $cp= $_POST['cp'];
               $provincia= $_POST['provincia'];
               $password= $_POST['password'];

              // creamos la conexión con la base de datos creada , pasándole los atributos que hemos creado en conexion.php.
               $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

               if ($conexion->connect_error) {
               die("La conexion falló: " . $conexion->connect_error);
              }
              // ahora vamos a realizar una búsqueda en la base de datos para comprobar que el usuario no está ya registrado previamente.
               $buscarCorreo = "SELECT * FROM $tbl_name WHERE correo = '$_POST[correo]' ";

               $result = $conexion->query($buscarCorreo);

               $count = mysqli_num_rows($result);

               if ($count == 1) {
                 // si el correo ya está en nuestra base de datos , se lo indicamos al usuario por pantalla.
               echo "<br />". "Correo ya registrado, ingresa otro." . "<br />";

               echo "<a href='registro.php'>Registrarse.</a>";
               }

               else{
              // introduzco todos los valores en la base de datos.
               $query = "INSERT INTO usuarios (nombre, apellidos ,correo , direccion , direccion2 , ciudad , cp , provincia , password) VALUES ('$_POST[nombre]', '$_POST[apellidos]','$_POST[correo]',
               '$_POST[direccion]', '$_POST[direccion2]','$_POST[ciudad]','$_POST[cp]','$_POST[provincia]','$_POST[password]')";
              // emito un mensaje al usuario dando las gracias por haberse registrado
               if ($conexion->query($query) === TRUE) {
                 echo  "Bienvenid@ : " . $_POST['nombre'] .  ", gracias por registrarte." . "</br>";
                 echo "<a href='login.html'>Iniciar Sesion </a>";
               }
              // en caso de que falle reporto un error al usuario.
               else {
               echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
                 }
               }
               // cierro la conexión con la base de datos.
               mysqli_close($conexion);
              ?>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Login -->

    <!-- Footer -->
    <footer class="footer">
      <div class="footer-top section">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6 col-12">
              <div class="single-footer about">
                <p class="text">Tu tienda de cachimbas y accesorios por excelencia.</p>
                <p class="call">¿Tienes dudas? Llámanos.<span><a href="tel:+34 651093926">+34 651093926</a></span></p>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12">
              <div class="single-footer links">
                <h4>Información</h4>
                <ul>
                  <li><a href="#">Sobre nosotros</a></li>
                  <li><a href="#">Faq</a></li>
                  <li><a href="#">Términos y Condiciones</a></li>
                  <li><a href="#">Contacto</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12">
              <div class="single-footer links">
                <h4>Servicio al cliente</h4>
                <ul>
                  <li><a href="#">Métodos de pago.</a></li>
                  <li><a href="#">Devoluciones.</a></li>
                  <li><a href="#">Envíos.</a></li>
                  <li><a href="#">Política de privacidad.</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
      <!--Añadimos un div que irá al final de la página donde incluiremos los métodos de pago -->
      <div class="copyright">
        <div class="container">
          <div class="inner">
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="left">
                  <p>Copyright © 2020 Christian Galeano 2º DAW  -  All Rights Reserved.</p>
                </div>
              </div>
              <div class="col-lg-6 col-12">
                <div class="right">
                  <img src="images/payments.png" alt="#">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slicknav.min.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/active.js"></script>
  </body>
  </html>
