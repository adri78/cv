<?php
 
if(isset($_POST['email'])) {
 
    $email_to = "adri78@gmail.com";
    $email_subject = "Contacto desde el sitio web";
 
if(!isset($_POST['name']) ||
!isset($_POST['website']) ||
!isset($_POST['email']) ||
!isset($_POST['phone']) ||
!isset($_POST['message'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br/>";
die();
} else{
    echo "¡El formulario se ha enviado con éxito! <br> Pronto nos comunicaremos con vos.";
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "Webs: " . $_POST['website'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['phone'] . "\n";
$email_message .= "Comentarios: " . $_POST['message'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);


 

 
}else{
    echo " Ocurrió un error y el formulario no ha sido enviado.";
    echo "Por favor, vuelva atrás y verifique la información ingresada";
}
?>
