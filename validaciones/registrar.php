<?php

include 'conexion.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
$email=$_POST['email'];
$conexion->query("insert into usuario (nombre,telefono,email,password,img_perfil,nivel)  
    values( 
      '".$_POST['nombre']."',
      '".$_POST['telefono']."',
      '".$_POST['email']."',
      '".sha1($password)."',
      'default.jpg',
      'cliente' 
          )   
  ")or die($conexion->error);
  $id_usuario = $conexion->insert_id;

if (!$conexion) {
	echo '
    <script>
    alert("El usuario no se pudo registrar, por favor intente de nuevo");
    window.location = "../view/registro.php";
    </script>
    ';
    exit;
}else{
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'pruebacuentas626@gmail.com';                     //SMTP username
        $mail->Password   = 'luisfernando30';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('pruebacuentas626@gmail.com', 'RESTAURANTE "CG"');
        $mail->addAddress($email);     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'RESTAURANTE "CG"';
        $mail->Body    = 'GRACIAS POR UNIRTE A NUESTRA FAMILIA "RESTAURANTE CG"';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo '
        <script>
        alert("registrado correctamente");
        window.location = "../index.php";
        </script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
}
//cerrar conexion
mysqli_close($conexion);


 ?>