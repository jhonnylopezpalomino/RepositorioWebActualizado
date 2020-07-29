<?php
session_start();
error_reporting(1);
include("conexion.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
/*$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs))
{
unset($_SESSION[qn]);
exit;
}*/
/*if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
    header("location: login.php");
}*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Evaluacion</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/quiz.css" rel="stylesheet" type="text/css">
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
    <center><h2>EXAMEN DE RETROALIMENTACION</h2></center>
<?php
include("header.php");


$query="SELECT * FROM mst_question";

$rs=mysqli_query($conexion,"SELECT * FROM mst_question where test_id=$tid") or die(mysqli_error());
if(!isset($_SESSION[qn]))
{
  $_SESSION[qn]=0;
  mysqli_query($conexion,"DELETE from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
  $_SESSION[trueans]=0;
  
}
else
{ 
    if($submit=='Siguiente Pregunta' && isset($ans))
    {
        mysqli_data_seek($rs,$_SESSION[qn]);
        $row= mysqli_fetch_row($rs);  
        mysqli_query($conexion,"INSERT INTO mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
        if($ans==$row[8])
        {
              $_SESSION[trueans]=$_SESSION[trueans]+1;
        }
        $_SESSION[qn]=$_SESSION[qn]+1;
    }
    else if($submit=='Enviar Evaluacion' && isset($ans))
    {
        mysqli_data_seek($rs,$_SESSION[qn]);
        $row= mysqli_fetch_row($rs);  
        mysqli_query($conexion,"INSERT INTO mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
        if($ans==$row[8])
        {
              $_SESSION[trueans]=$_SESSION[trueans]+1;
        }
        echo "<h1 class=head1> Resultado</h1>";
        $_SESSION[qn]=$_SESSION[qn]+1;
        echo "<Table align=center><tr class=tot><td> total Preguntas<td> $_SESSION[qn]";
        echo "<tr class=tans><td>Respuestas correctas<td>".$_SESSION[trueans];
        $w=$_SESSION[qn]-$_SESSION[trueans];
        echo "<tr class=fans><td>Respuesta incorrecta<td> ". $w;
        echo "</table>";
        mysqli_query($conexion,"INSERT INTO mst_result(login,test_id,test_date,score) values('$login',$tid,'".date("d/m/Y")."',$_SESSION[trueans])") or die(mysqli_error());
        echo "<h1 align=center><a href=review.php>Pregunta de repaso</a> </h1>";
        unset($_SESSION[qn]);
        unset($_SESSION[sid]);
        unset($_SESSION[tid]);
        unset($_SESSION[trueans]);
        exit;
    }
}
$rs=mysqli_query($conexion,"SELECT * FROM mst_question WHERE test_id=$tid") or die(mysqli_error());
if($_SESSION[qn]>mysqli_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Ocurrio algun error</h1>";
session_destroy();
echo "Please <a href=login.php> Empezar de nuevo</a>";

exit;
}
mysqli_data_seek($rs,$_SESSION[qn]);
$row= mysqli_fetch_row($rs);
echo "<form name=myfm method=post action=quiz2.php>";
echo "<center><table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
echo "<img border=0 src=img/blackbar.jpg width=100% height=15></td>";
$n=$_SESSION[qn]+1;
echo "<tr><td><span class=style2>Pregunta ".  $n .": $row[2]</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>$row[3]";
echo "<tr><td class=style8> <input type=radio name=ans value=2>$row[4]";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[5]";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[6]";

if($_SESSION[qn]<mysqli_num_rows($rs)-1)
echo "<tr><td></p><center><input type=submit name=submit value='Siguiente Pregunta'></form>";
else
echo "<tr><td></p><center><input type=submit name=submit value='Enviar Evaluacion'></form>";
echo "</table></table>";
?>
</body>
</html>
