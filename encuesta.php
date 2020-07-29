
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulario de Contacto </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/contactame.css" rel="stylesheet">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/contactame.css">
    <link rel="stylesheet" href="css/encuesta.css">
  </head>
  <body>
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
              <h1>BIENVENIDOS AL REPOSITORIO WEB</h1>
            </div>
          </div>
        </div>
      </div>
    <nav class="menu-principal">
            <a href="index.php"  >Inicio</a>
            <a href="cursos.html">Curso</a>
             <a href="Ranking.html">Ranking</a>
              <a href="reportecurso.php">Reportes</a>
               <a href="Noticias.html">Noticias</a>
               <a href="Nosotros.html">Nosotros</a>
                <a href="contactame.html" >Contactenos</a>
                 <a href="logout.php"><img class="close" src="img/salir.png" alt="Salir del sistema" title="Salir"></a>
            
        </nav>
        <div class="imagen">
      <ul id="dx">
        <li><img src="img/imagen10.jpg" alt=""></li>
      </ul> 
    </div>

	<center><h2>DEJANOS TU OPINION SOBRE EL CURSO</h2> </center>
	<div id="contieneformulari">
		<form action="" method="post">
			<input type="radio" name="calificacion" id="calificacion" value="EXCELENTE"> EXCELENTE <br>
			<input type="radio" name="calificacion" id="calificacion" value="BUENO"> BUENO <br>
			<input type="radio" name="calificacion" id="calificacion" value="REGULAR"> REGULAR <br>
			<input type="radio" name="calificacion" id="calificacion" value="MALO"> MALO <br>
			<input type="radio" name="calificacion" id="calificacion" value="PESIMO"> PESIMO <br>
			<br>
			<input type="submit" value="votar" name="votar" id="boton">

		</form>
	</div>
</body>
</html>

<?php
        include 'conexion.php';
//recibir datos y almacenar en variables
//$_SESSION['iddoc'] = $data['iddocentes'];
$calificacion = $_POST["calificacion"];

//consulta para insertar
$insertar = "INSERT INTO encuesta_satisfaccion(calificacion) VALUES ('$calificacion')";
//ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
  echo 'error al enviar datos';
}
//else{
	//header("location:index.html");
  
//}
//cerrar conexion
mysqli_close($conexion);




