<?php

// check for form submission - if it doesn’t exist then send back to contact form
if (!isset($_POST["save"]) || $_POST["save"] !="contact") {
	header("Location: index.php"); exit;
}
// get the posted data
$name = $_POST["contact_name"];
$email_address = $_POST["contact_email"];
$phone_address = $_POST["contact_telefono"];
$message = $_POST["contact_message"];

// check that a name was entered
if (empty($name))
	$error = "Por favor, proporcione su nombre completo.";

// check that an email address was entered
elseif (empty($email_address))
	$error = "Por favor, proporcione una direccion de correo.";

// check for a valid email address
elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email_address))
	$error = "Por favor, proporcione una direccion de correo valida.";

// check that a message was entered
elseif (empty($message))
	$error = "No puedo enviar su mensaje si no ha escrito ninguno.";

// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
	header("Location: index.php?e=".urlencode($error)); exit;
}

// write the email content
$email_content = "Nombre: $name\n";
$email_content .= "Correo Electronico: $email_address\n";
$email_content .= "Telefono: $phone_address\n";
$email_content .= "Mensaje:\n\n$message";

// send the email
mail ("mr.xusangel@gmail.com ", "Nuevo mensaje directo desde io-consultores.com.mx", $email_content);

// send the user back to the form
header("Location: index.php?s=".urlencode("Su mensaje directo ha sido enviado. ¡Gracias!.")); exit;
?>