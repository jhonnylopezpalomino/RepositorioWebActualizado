<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php 
	include "conexion.php";
?>
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		
		<meta name="description" content="">
		<!-- Meta Keyword -->
		
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>REPOSITORIO</title>
	
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/cursos/bannercursos.css">
		<link rel="stylesheet" href="css/cursos/estiloscursos.css">
		<link rel="stylesheet" href="css/slider.css">
		<link rel="stylesheet" href="css/curso.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/video-js.css">
		<script src="js/video.js"></script>
	</head>
	<body>
		<header>
			<div class="header-top">
				<div class="container">
				</div>
			</div>
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
							<a href="index.html">
								<img class="img-fluid" src="img/logo.png" alt="">
							</a>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
							<h1>BIENVENIDOS AL RESPOSITORIO WEB</h1>
						</div>
					</div>
				</div>
			</div>
			  <nav class="menu-principal">
            <a href="index.php" >Inicio</a>
            <a href="#" class="active">Curso</a>
             <a href="Ranking.html">Ranking</a>
              <a href="reportes.html">Reportes</a>
               <a href="Noticias.html">Noticias</a>
               <a href="Nosotros.html">Nosotros</a>
                <a href="Contactame.html">Contactenos</a>
                <a href="logout.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
                 
        </nav>
		
			<section id="banner">
                <img src="img/imagencursos/bannercursos.jpg">
                <div class="contenedor">
                     <center><h2>ZOOM</h2></center>
                <center><p>El contenido de este curso atendera las necesidade de los docentes que se inician en el uso de Zoom, ademas de quienes deseen profundizar en las opciones mas avanzadas de la plataforma.</p></center>
                </div>
                <center><p><h3>¿Qué es Zoom?</h3></p></center>
                <center><p>Zoom es una plataforma que permite realizar videoconferencias, chatear e impartir webinars de forma rápida y sencilla. Con esta herramienta podrás hacer videollamadas y concertar reuniones y entrevistas con tus clientes, alumnos y amigos.</p></center>
                <center><p>Es una herramienta muy potente con la que te ganarás la confianza de potenciales clientes, podrás entrevistar a referentes de tu sector y dar soporte a los alumnos de tu curso o plataforma de membresía.</p></center>
                <center><p>Su versatilidad la convierte en una herramienta comunicativa multiusos para todos los profesionales de Internet y de aquellos que prestaban sus servicios de forma presencial y ahora mismo no pueden hacerlo.</p></center>
                <div class="curso">
                	<center><span>VIDEO Nª 1</span></center><br>	
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vzoom">
						<source src="video/videoZM1.mp4" type="video/mp4"> 

					</video>
					<center><span>INTRODUCCION A ZOOM</span></center>	
					<center><a href="reproductor/reproductor1zm.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vzoom',{
            		});
            	</script>
            	<div class="curso">
            		<center><span> VIDEO Nª 2</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vzoom_1">
						<source src="video/videoZM2.mp4" type="video/mp4"> 
					</video>
					<center><span>DESCARGA E INSTALACION</span></center>
					<center><a href="reproductor/reproductor2zm.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vzoom_1',{
            		});
            	</script>
            	<div class="curso">
            		<center><span>VIDEO Nª 3</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vzoom_2">
						<source src="video/videoZM3.mp4" type="video/mp4"> 
					</video>
					<center><span>PROGRAMA TU REUNION</span></center>
					<center><a href="reproductor/reproductor3zm.php">PLAY</a></center>	
            	</div>
				<script>
            		var reproductor = videojs('vzoom_2',{
            		});
            	</script>
            	<div class="curso">
            		<center><span>VIDEO Nª 4</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vzoom_3">
						<source src="video/videoZM4.mp4" type="video/mp4"> 
					</video>
					<center><span>COMO INVITAR A TU REUNION</span></center>
					<center><a href="reproductor/reproductor4zm.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vzoom_3',{
            		});
            	</script>
            	<div class="curso">
            		<center><span>VIDEO Nª 5</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vzoom_4">
						<source src="video/videoZM5.mp4" type="video/mp4"> 
					</video>
					<center><span>COMO CAMBIAR EL IDIOMA</span></center>
					<center><a href="reproductor/reproductor5zm.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vzoom_4',{
            		});
            	</script>
            	<div class="curso">
            		<center><span>VIDEO Nª 6</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vzoom_5">
						<source src="video/videoZM6.mp4" type="video/mp4"> 
					</video>
					<center><span>COMO CREAR TU CUENTA</span></center>
					<center><a href="reproductor/reproductor6zm.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vzoom_5',{
            		});
            	</script>
            	<div class="curso">
            		<center><span>VIDEO Nª 7</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vzoom_6">
						<source src="video/videoZM7.mp4" type="video/mp4"> 
					</video>
					<center><span>CONOCIENDO EL ENTORNO DE ZOOM</span></center>
					<center><a href="reproductor/reproductor7zm.php">PLAY</a></center>	
				</div>
            	<script>
            		var reproductor = videojs('vzoom_6',{
            		});
            	</script>
            	
			</section>
			<center><h1><a href="cursos.html">SALIR</a></h1></center>
		</header>
		<button type="button" class="btn btn-success" onclick="window.location.href='quiz2.php'">EXAMEN FINAL</button >
		
		<button type="button" class="btn btn-success" onclick="window.location.href='encuesta.php'">ENCUESTA FINAL</button >
		


	</body>
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/superfish.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>
</html>