<?php
// Configuración
$to = "contacto@nowadays-studio.com"; // Tu correo real
$subject_prefix = "[NUEVO LEAD WEB]";

// Validación básica de seguridad
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sanitización de datos
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $service = strip_tags(trim($_POST["service"]));
    $message = strip_tags(trim($_POST["message"]));

    // Validar contenido
    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Redirigir con error (puedes mejorar esto con JS luego)
        header("Location: index.html?status=error");
        exit;
    }

    // Construcción del Email
    $subject = "$subject_prefix - $service";
    
    $email_content = "Has recibido un nuevo contacto desde la web:\n\n";
    $email_content .= "Nombre: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Servicio de Interés: $service\n\n";
    $email_content .= "Mensaje:\n$message\n";

    // Headers para evitar SPAM
    // IMPORTANTE: En Hostinger, el 'From' debe ser un correo existente en tu dominio
    // Ejemplo: no-reply@nowadays-studio.com o el mismo contacto@
    $headers = "From: contacto@nowadays-studio.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Enviar
    if (mail($to, $subject, $email_content, $headers)) {
        header("Location: index.html?status=success");
    } else {
        header("Location: index.html?status=error");
    }

} else {
    // Si intentan acceder directo al archivo
    header("Location: index.html");
}
?>