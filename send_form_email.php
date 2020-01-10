<?php
header ('Content-type: text/html; charset=utf-8'); 
    // 
 
    $email_to = "maday.cabrero@gmail.com";
 
    $email_subject = "Formulario Boda";
	
	$email_from = "weddingPage@gmail.com";
 
    function died($error) {
 
        // mensajes de error
 
        echo "Lo sentimos, hubo un error en sus datos y el formulario no puede ser enviado en este momento. ";
 
        echo "Detalle de los errores.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Por favor, corrija estos errores e inténtelo de nuevo.<br /><br />";
        die();
    }
	
 //En esta parte el valor "name"  sirve para crear las variables que recolectaran la información de cada campo
 
    $full_name = $_POST['nombre']; // requerido
 
    $wedding_assistance = $_POST['asistencia-boda']; // requerido
  
    $n_adults = $_POST['nAdultos']; // requerido

    $n_kids = $_POST['nNinios']; // requerido 
	
	$allergies = $_POST['alergias']; // no requerido 
	
    $comments = $_POST['comentarios']; // requerido
	
	$pre_wedding_assistance = $_POST['asistenciaPreboda']; // requerido

  
//Este es el cuerpo del mensaje tal y como llegará al correo
 
    $email_message = "Datos del formulario.\n\n";
 
 
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
 
 
    $email_message .= "Nombre y apellidos: ".clean_string($full_name)."\n";
 
    $email_message .= "Asistencia Boda: ".clean_string($wedding_assistance)."\n";

    if(strcasecmp($wedding_assistance, "SI") == 0){
        
        $email_message .= "Nº Adultos: ".clean_string($n_adults)."\n";

        $email_message .= "Nº Niños: ".clean_string($n_kids)."\n";

        $email_message .= "Alergias: ".clean_string($allergies)."\n";

        $email_message .= "Asistencia preboda ".clean_string($pre_wedding_assistance)."\n";

        $email_message .= "Comentarios: ".clean_string($comments)."\n";

    }
 
//Se crean los encabezados del correo
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);

header("Location: main.php");
 
?>
