<?php
	include("db.php");
	$con = conn();
?>
<!DOCTYPE html>
<html class="no-js"> 
   <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Compra tu vehículo perfecto</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
   <meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
   <meta name="author" content="FreeHTML5.co" />


	 <!-- Facebook and Twitter integration -->
   <meta property="og:title" content=""/>
   <meta property="og:image" content=""/>
   <meta property="og:url" content=""/>
   <meta property="og:site_name" content=""/>
   <meta property="og:description" content=""/>
   <meta name="twitter:title" content="" />
   <meta name="twitter:image" content="" />
   <meta name="twitter:url" content="" />
   <meta name="twitter:card" content="" />

   <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
   <link rel="shortcut icon" type= "image/x-icon" href="images/favicon.ico">

   <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>


   <!-- Animate.css -->
   <link rel="stylesheet" href="css/animate.css">
   
   <!-- Magnific Popup -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <!-- Bootstrap  -->
   <link rel="stylesheet" href="css/bootstrap.css">
   <!-- Icomoon Icon Fonts-->
   <link rel="stylesheet" href="css/icomoon.css">
   <!-- Theme style  -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Vehicles catalog  -->
   <link rel="stylesheet" href="css/vehicles.css">
   <!-- popup  -->
   <link rel="stylesheet" href="css/popup.css">


   <!-- Modernizr JS -->
   <script src="js/modernizr-2.6.2.min.js"></script>
   <!-- FOR IE9 below -->
   <script src="https://kit.fontawesome.com/150af63249.js"></script>
   <script src="js/llamarvehiculos.js"></script>
   <!--[if lt IE 9]>
   <script src="js/respond.min.js"></script>
   <![endif]-->

   </head>
   <body>
   
   <div id="fh5co-wrap">
	   <header id="fh5co-header">
		   <div class="container">
			   <nav class="fh5co-main-nav">
				   <ul>
					   <li><a href="index.html"><span>Inicio</span></a></li>
					   <li class="fh5co-active"><a href="vehiculos.php"><span>Vehículos</span></a></li>
					   <li><a href="inscripcion.php"><span>Vende tu vehiculo aqui</span></a></li> 
					   <li><a href="contacto.html"><span>Contacto</span></a></li>
					   <li><a href="login.php"><span>Accede a tu cuenta aqui</span></a></li>
					   <a href="datosusuario.php"><img src="images/usuario.png" width="45" height="45" align="left"></a>
					</ul>
			   </nav>
		   </div>
	   </header>

	   <div class="fh5co-hero" style="background-image: url(images/imageninscrip.jpg);" data-stellar-background-ratio="0.5">
		   <div class="overlay"></div>
		   <div class="container">
			   <div class="row">
				   <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					   <div class="fh5co-intro fh5co-table-cell">
						   <h1 class="text-center">Encuentra tu nuevo Vehiculo</h1>
						   <p>Estas a un click del auto de tus sueños</p>
					   </div>
				   </div>
			   </div>
		   </div>
	   </div>
   

	   <div class="fh5co-section">
		   <div class="container">
			<h2 class="titulo">Catálogo de vehículos</h2>
			<?php
				$query = "SELECT * FROM vehiculos";
				$res = $con->query($query);

				while($row = $res->fetch_assoc()){
			?>
				<div class="autos" id="lista-vehiculos">
					<div><?php echo $row['marca'];?></div>
					<div><?php echo $row['modelo'];?></div>
					<div><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagenes']);?>"></div>
				</div>
			<?php
			}
			?>	
			</div>
			   <div class="row">
				   <div class="col-md-12">
					   <div class="row">
						   <div class="col-md-6">
						   </div>
					   </div>
				   </div>
				   <div class="col-md-6">
					   <div class="col-md-6">
						   
			   <form action="../../form-result.php" target="_blank">
			   </form>
					   
					   </div>
				   </div>
				   <div class="col-md-6">
				   </div>
			   </div>

		   </div>
	   </div>

   </div> 


   <footer id="fh5co-footer">
	   <div class="container">
		   <div class="row">

			   <div class="col-md-3 col-md-push-1">
				   <h3>Más</h3>
				   <ul>
					   <li><a href="vehiculos.php">Productos</a></li>
					   <li><a href="#">Servicios</a></li>
					   <li><a href="contacto.html">Contacto</a></li>
				   </ul>
			   </div>
			   <div class="col-md-3 col-md-push-1">
				   <h3>Siguenos</h3>
				   <ul class="fh5co-social">
					   <li><a href="https://twitter.com/Autoonlineuct"><i class="icon-twitter"></i> <span>Twitter</span></a></li>
					   <li><a href="https://www.facebook.com/Automotora-online-UCT-107443225441994"><i class="icon-facebook"></i> <span>Facebook</span></a></li>
					   <li><a href="https://www.instagram.com/_auto.online_/"><i class="icon-instagram"></i> <span>Instagram</span></a></li>
				   </ul>
			   </div>
		   </div>
		   <div class="row">
			   <div class="col-md-12 fh5co-copyright text-center">
				   <p><small>&copy; 2022 Automotora Derechos Reservados </small>
			   </div>
		   </div>
	   </div>
   </footer>
   
   <!-- jQuery -->
   <script src="js/jquery.min.js"></script>
   <!-- jQuery Easing -->
   <script src="js/jquery.easing.1.3.js"></script>
   <!-- Bootstrap -->
   <script src="js/bootstrap.min.js"></script>
   <!-- Waypoints -->
   <script src="js/jquery.waypoints.min.js"></script>
   <!-- Stellar -->
   <script src="js/jquery.stellar.min.js"></script>
   <!-- MAIN JS -->
   <script src="js/main.js"></script>

   </body>
</html>