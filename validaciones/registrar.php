<?php

include 'conexion.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

$mail = new PHPMailer(true);


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];
//encriptar clave
$clave = hash('sha512', $clave);
//insertar datos
$insertar = "INSERT INTO usuario (nombre, apellido, direccion, correo, clave)VALUES('$nombre', '$apellido', '$direccion', '$correo', '$clave')";
//ejecutar consulta
$resultado = mysqli_query($conexion,$insertar);
if (!$resultado) {
	echo '
    <script>
    alert("El usuario no se pudo registrar, por favor intente de nuevo");
    window.location = "../view/registrar.php";
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
        $mail->addAddress($correo);     //Add a recipient
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