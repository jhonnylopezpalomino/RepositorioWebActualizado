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
                     <center><h2>BLACKBOARD</h2></center>
                <center><p>El contenido de este curso atendera las necesidade de los docentes que se inician en el uso de Blackboard, ademas de quienes deseen profundizar en las opciones mas avanzadas de la plataforma.</p></center>
                </div>
                <center><p><h3>¿Qué es Blackboard?</h3></p></center>
                <center><p>Blackboard es un sistema de gestión de cursos en linea. Blackboard permite centralizar una serie de herramientas de "e-learning", como acceso a contenidos, áreas para compartir archivos, foros de discusión asincrónicos, aula virtual o "chat", libro de calificaciones electrónico, evaluaciones virtuales y otros, Por otra parte Blackboard permite organizar los cursos por códigos, unidades academicas y profesores, así como asignar claves a los estudiantes, lo cual da como resultado un sistema ágil, seguro y confiable para que las instituciones educativas tengan acceso a las ventajas de la educacion virtual.</p></center>
                
                
                <div class="curso">
                	<center><span> VIDEO Nº 1</span></center><br>	
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vblackboard">
						<source src="video/videoBB1.mp4" type="video/mp4"> 

					</video>
					<center><span>INTRODUCCION A BLACKBOARD</span></center>	
					<center><a href="reproductor/reproductor1bb.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vblackboard',{
            		});
            	</script>
            	<div class="curso">
            		<center><span> VIDEO Nº 2</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vblackboard_1">
						<source src="video/videoBB2.mp4" type="video/mp4"> 
					</video>
					<center><span>COMO INGRESAR A LA VIDEO CONFERENCIA</span></center>
					<center><a href="reproductor/reproductor2bb.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vblackboard_1',{
            		});
            	</script>
            	<div class="curso">
            		<center><span> VIDEO Nº 3</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vblackboard_2">
						<source src="video/videoBB3.mp4" type="video/mp4"> 
					</video>
					<center><span>MENÚ USO DE COLLABORATE</span></center>
					<center><a href="reproductor/reproductor3bb.php">PLAY</a></center>	
            	</div>
				<script>
            		var reproductor = videojs('vblackboard_2',{
            		});
            	</script>
            	<div class="curso">
            		<center><span> VIDEO Nº 4</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vblackboard_3">
						<source src="video/videoBB4.mp4" type="video/mp4"> 
					</video>
					<center><span>CONOCIENDO EL PANEL COLLABORATE</span></center>
					<center><a href="reproductor/reproductor4bb.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vblackboard_3',{
            		});
            	</script>
            	<div class="curso">
            		<center><span> VIDEO Nº 5</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vblackboard_4">
						<source src="video/videoBB5.mp4" type="video/mp4"> 
					</video>
					<center><span>ZONA MULTIMEDIA DE COLLABORATE</span></center>
					<center><a href="reproductor/reproductor5bb.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vblackboard_4',{
            		});
            	</script>
            	<div class="curso">
            		<center><span> VIDEO Nº 6</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vblackboard_5">
						<source src="video/videoBB6.mp4" type="video/mp4"> 
					</video>
					<center><span>USANDO LA PIZARRA DE COLLABORATE</span></center>
					<center><a href="reproductor/reproductor6bb.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vblackboard_5',{
            		});
            	</script>
            	<div class="curso">
            		<center><span> VIDEO Nº 7</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vblackboard_6">
						<source src="video/videoBB7.mp4" type="video/mp4"> 
					</video>
					<center><span>INTERFAZ DEL ROL MODERADOR</span></center>	
					<center><a href="reproductor/reproductor7bb.php">PLAY</a></center>	
				</div>
            	<script>
            		var reproductor = videojs('vblackboard_6',{
            		});
            	</script>
			</section>
			 <center><h1><a href="cursos.html">SALIR</a></h1></center>
		</header>

		<button type="button" class="btn btn-success" onclick="window.location.href='quiz.php'">EXAMEN FINAL</button >
		
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