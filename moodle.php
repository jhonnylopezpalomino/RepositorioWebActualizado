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
                    <h2>Moodle</h2>
                    <p>Usted puede visualizar todos los videos disponibles para este curso</p>
                </div>
                <center><p>Usted puede visualizar todos los videos disponibles para este curso</p></center>
                <div class="curso">
                	<center><span>VIDEO Nª 1</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vmoodle">
						<source src="video/videoMD1.mp4" type="video/mp4"> 

					</video>
					<center><span>CONOCIENDO LA PLATAFORMA MOODLE</span></center>	
					<center><a href="reproductor/reproductor1MD.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vmoodle',{
            		});
            	</script>
            	<div class="curso">
            		<center><span>VIDEO Nª 2</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vmoodle_1">
						<source src="video/videoMD2.mp4" type="video/mp4"> 
					</video>
					<center><span>COMO ACCEDER A MOODLE INSTITUCIONAL</span></center>
					<center><a href="reproductor/reproductor2MD.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vmoodle_1',{
            		});
            	</script>
            	<div class="curso">
            		<center><span>VIDEO Nª 3</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vmoodle_2">
						<source src="video/videoMD3.mp4" type="video/mp4"> 
					</video>
					<span>COMO ACCEDER A MOODLE DESDE EL MOVIL</span>
					<center><a href="reproductor/reproductor3MD.php">PLAY</a></center>	
            	</div>
				<script>
            		var reproductor = videojs('vmoodle_2',{
            		});
            	</script>
            	<div class="curso">
            		<center><span>VIDEO Nª 4</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vmoodle_3">
						<source src="video/videoMD4.mp4" type="video/mp4"> 
					</video>
					<span>COMO HAGO BACKUP DE CURSO EN MOODLE</span>
					<center><a href="reproductorreproductor4MD.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vmoodle_3',{
            		});
            	</script>
            	<div class="curso">
            		<center><span>VIDEO Nª 5</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vmoodle_4">
						<source src="video/videoMD5.mp4" type="video/mp4"> 
					</video>
					<span>DONDE ENCUENTRO MIS CURSOS EN MOODLE</span>
					<center><a href="reproductorreproductor5MD.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vmoodle_4',{
            		});
            	</script>
            	<div class="curso">
            		<center><span>VIDEO Nª 6</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vmoodle_5">
						<source src="video/videoMD6.mp4" type="video/mp4"> 
					</video>
					<span>COMO CREAR UN ANUNCIO EN MOODLE</span>
					<center><a href="reproductorreproductor6MD.php">PLAY</a></center>	
            	</div>
            	<script>
            		var reproductor = videojs('vmoodle_5',{
            		});
            	</script>
            	<div class="curso">
            		<center><span>VIDEO Nª 7</span></center><br>
					<video class="fm-video video-js vjs-16-9 vjs-big-play-centered" data-setup="{}"controls id="vmoodle_6">
						<source src="video/videoMD7.mp4" type="video/mp4"> 
					</video>
					<span>COMO SUBIR UN ARCHIVO A LAS TAREAS</span>	
					<center><a href="reproductor/reproductor7MD.php">PLAY</a></center>	
				</div>
            	<script>
            		var reproductor = videojs('vmoodle_6',{
            		});
            	</script>
			</section>
			
		</header>
	 <center><h1><a href="cursos.html">SALIR</a></h1></center>
		</header>

		<button type="button" class="btn btn-success" onclick="window.location.href='quiz3.php'">EXAMEN FINAL</button >
		
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