<?php

	session_start();

	define("MY_EMAIL", "desarrolladoresfreak@gmail.com");
	
	
	$nombre = ($_POST['nombre']);
	$correo = ($_POST['correo']);
	$asunto = ($_POST['asunto']);
	$mensaje = ($_POST['mensaje']);


	function errorResponse ($messsage) {
    header('HTTP/1.1 500 Error Interno del Servidor');
    $_SESSION["error"] = $messsage;

  }

  function setMessageBody ($nombre, $email, $asunto, $mensaje) {
  $message_body = "Nombre: " . $nombre."\n";
  $message_body .= "email: " . $email."\n";
  $message_body .= "Asunto: " . $asunto ."\n";
  $message_body .= "Mensaje: " . nl2br($mensaje);
  return $message_body;
  }

	if(mail(MY_EMAIL,"Mensaje desde pagina web", setMessageBody($nombre, $correo, $asunto, $mensaje),"MIME-Version: 1.0\r\n"."From: $email")) {
    $_SESSION["message"] =  'mensaje enviado';
  } else {
    header('HTTP/1.1 500 Error Interno del Servidor');
    $_SESSION["error"] = 'Error al enviar';
  }
  header('Location:./index.php#contact');
  



?>