<?php
session_start();
if (!isset($_SESSION['user'])) {
	header("location: login_register.html");
}
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Ahorro</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
	<!-- ventana pop ajustes CSS -->
    <link rel="stylesheet" href="css/userSetngs.css">


</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
	<authentication mode="Forms">
		<forms loginUrl="~/login_register.html" protection="All" timeout="20" />
	   </authentication>

   	<!-- LOADER -->
	   <div id="preloader">
            <div class="loader">
                <div class="box"></div>
                <div class="box"></div>
            </div>
        </div>
         <!--end loader -->

	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.php"><img src="img/savenet1.png" alt="image" width="100px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#ahorro">Ahorro</a></li>                    						
					<li><a class="nav-link" href="index.php">Inicio</a></li>
						<li><a class="nav-link" href="#myForm"><button class="open-button" onclick="openForm()"></button><?php echo $_SESSION['user']?></a></li>
						<buttto class="shwit">
							<span><i class="fad fa-sun"></i></span>
							<span><i class="fad fa-moon"></i></span>
						</buttto>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
	<!-- popup ajustes -->
	<div class="form-popup" id="myForm">
 	 <div class="form-container">
    	<h2>Ajustes <?php echo $_SESSION['user']?></h2>
				<button  type="submit" class="btn" onclick="openPass()">cambiar contraseña</button>
				<div id="botones" style="display:none;">
      		<form  action="php/NewPass.php" method="POST">
            	<input class="btn" name="user" type="text" placeholder="<?php echo $_SESSION['user']?>" disabled>
            	<br>
            	<input class="btn" name="passA" type="password" placeholder="Nueva Contraseña">    
            	<br>
				<input class="btn" type="submit" name="enviar" value="cambiar" require>
			</form>
			<input type="submit" class="btn cancel" onclick="closePass()" name="close" value="close">
    			</div>
        	<a href="php/logaut.php">
            	<button  type="submit" class="btn" >cerrar sesion</button>
        	</a>
    	<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  	</div>
	</div>
	<!-- popup end -->
	<!-- script -->
	<script>
	function openForm() {
  		document.getElementById("myForm").style.display = "block";
	}

	function closeForm() {
 		document.getElementById("myForm").style.display = "none";
	}
	function openPass(){
		document.getElementById("botones").style.display = "contents";
	}
	function closePass(){
		document.getElementById("botones").style.display = "none";
	}
		</script>
	<!-- script -->
    <!-- invercio -->
    <div id="invercion" class="gallery-box" style="background: #f7f7f7;"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                    <a href=""><h2>Invercion Descripcion</h2></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end ahorro -->
	<!-- Ahorro -->
	<div id="ahorro" class="gallery-box" style="background: #f7f7f7;"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<a href=""><h2>  </h2></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end ahorro -->

	<!-- Footer -->
	<footer>
		<tr>
     		<td><a href="" target="_blank" ><img name="utpdir04" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir04.png" width="50" alt="redes sociales"></a></td>
			<td><a href="" target="_blank"><img name="utpdir05" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir05.png" width="50"  alt="redes sociales"></a></td>
			<td><a href="" target="_blank"><img name="utpdir06" src="http://www.utpuebla.edu.mx/00imagenes/dir/utpdir06.png" width="50"  alt="redes sociales"></a></td>
		  </tr>
	</footer>
	<!-- End Footer -->
	
	<a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script>src="js/main.js"</script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>