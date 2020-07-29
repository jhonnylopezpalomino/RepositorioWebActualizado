<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>enviar correo</title>
    <link rel="stylesheet" href="css/enviarcorreo.css">
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="name" name="name"> 
        <input type="email" placeholder="email" name="email">
        <input type="text" placeholder="asunto" name="asunto">
        <textarea placeholder="mensaje" name="msg"></textarea>
        <input type="submit" name="enviar">

    </form>
    <?php 
    if (isset($_POST['enviar'])){
        if (!empty($_POST['name']) && !empty ($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {

            $name = $_POST['name'];
            $asunto = $_POST['asunto'];
            $msg = $_POST['msg'];
            $email = $_POST['email'];
            $header = "From: noreply@example.com" . "\r\n";
            $header = "Reply-To: noreply@example.com" . "\r\n";
            $header = "X-Mailer: PHP/". phpversion();
            $mail = @mail($email,$asunto,$mensaje,$header);
            if ($mail){
                echo "<h4>¡mail enviado exitosamente!</h4>";
            }

        }
    }

     ?>
</body>
</html>