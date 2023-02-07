<?php 
if (isset ($_POST['enviar'])){
    if (!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['email']) && !empty($_POST['msg'])){
        $nombre = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $cuerpo = $_POST['cuerpo'];
        $email = $_POST['email'];
        $header = "From: noreply@example.com" . "\r\n";
        $header. = "Reply-to: noreply@example.com" . "\r\n";
        $header. = "X-Mailer: PHP/" . phpversion();
        $mail = @mail($email, $asunto, $cuerpo, $header);
        if($mail){
            echo "<h4>¡Mail Enviado!</h4>"
        }
    }
}