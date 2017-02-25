<?php

//ini_set('display_errors', 'On');
//error_reporting(E_ALL);

require 'PHPMailer/PHPMailerAutoload.php';


if(isset($_POST['nombre']) && isset($_POST['mensaje']) && isset($_POST['email']))
{
  $email = $_POST["email"];
  $nombre = utf8_decode($_POST['nombre']);
  $telefono = $_POST["telefono"];
  $mensaje = utf8_decode($_POST["mensaje"]);

  $mail = new PHPMailer();

  $mail->setLanguage('es', '');
  $mail->setFrom('info@informaticasa.es', 'Contacto desde la web' );
  $mail->addReplyTo($email, $nombre);
  $mail->addAddress('info@informaticasa.es', utf8_decode('Informaticasa'));
  $mail->addBCC('carlona@informaticasa.es', utf8_decode('Carlo Navarro Alvarez'));
  $mail->addBCC('javiermadueno@gmail.com', utf8_decode('Javier Madueño Entrenas'));
  $mail->Subject = "Contacto desde Web";
  
  $mail->Body  = "<strong>Email de:</strong> {$email} <br><br>";
  $mail->Body .= "<strong>Nombre:</strong>  {$nombre} <br><br>";
  $mail->Body .= "<strong>Telefono:</strong> {$telefono} <br><br>";
  $mail->Body .= $mensaje;

  $mail->isHTML(true);

  if(empty($mail->ErrorInfo))
  {

    if($mail->send())
    {
      $mensaje = array('tipo' => "success", 
        'mensaje' => "¡Tu mensaje ha sido enviado correctamente! ¡Pronto nos pondremos en contacto contigo!" 
        );
      
      //echo json_encode($mensaje);
    }
    else
    {
      $mensaje = array('tipo'=>"error",
        'mensaje'=> $mail->ErrorInfo);
      //echo json_encode($mensaje);
    }
  }
  else
  {
    $mensaje = array('tipo'=>"error",
      'mensaje'=> $mail->ErrorInfo);
    //echo json_encode($mensaje);

    
  }
}
else
{
  $mensaje = array('tipo' => "error", 
        'mensaje' => "Falta algun dato obligatorio. Por favor, rellene los capos obligatorios." 
        );
}

echo json_encode($mensaje);

?>