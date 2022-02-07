<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

function insertDB($correo){
    try {
        $db = new PDO('mysql:host=mysql;dbname=web', "root", "Toor_2021*");
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    
    $query=$db->prepare('INSERT INTO clientes values(NULL,:correo)');
    $query->bindValue(':correo',$correo);
    $query->execute();
    if ($query) {
        return true;
    }else {
        return false;
    }
}


date_default_timezone_set('Etc/UTC');

$correo = $_POST['correo'];
$asunto = "Contacto";
$mensaje = "Contactar para futuro proyecto";

//Create a new PHPMailer instance
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'mail.aspnet.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'monitor@aspnet.com';
$mail->Password = 'alejandro';
$mail->setFrom($correo);
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->addAddress('monitor@aspnet.com', 'Monitor - ASPNET');
$mail->Subject = $asunto;
$mail->Body = $mensaje; 

if (!$mail->send()) {
    echo '<script>alert("El mensaje no ha podido ser enviado");
    window.location="index.html";
    </script>';
} else {
    if(insertDB($correo)){
        echo '<script>alert("Mensaje enviado");
        window.location="index.html";
        </script>';
    }else{
        echo '<script>alert("No has sido guardado en la base de datos");
        window.location="index.html";
        </script>';
    }
}

