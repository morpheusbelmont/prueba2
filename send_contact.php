<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Dirección de correo de la empresa
    $to = "empresa@dominio.com";
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $name\nCorreo: $email\nMensaje: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "¡Gracias por tu mensaje, nos pondremos en contacto pronto!";
    } else {
        echo "Hubo un problema al enviar tu mensaje. Intenta nuevamente.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
