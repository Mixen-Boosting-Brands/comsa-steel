<?php
    /**
     * PHPMailer multiple files upload and send
     */

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require './PHPMailer/PHPMailer.php';
    require './PHPMailer/SMTP.php';
    require './PHPMailer/Exception.php';

    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';

    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'in-v3.mailjet.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '42e23eb44b2d9e89fdfff7f7da409ca1';                     //SMTP username
    $mail->Password   = '99d52fd94b726b1a881d4f50ef29a077';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;
    // $mail->SMTPDebug = 1;

    if (isset($_FILES['userfile-1']['tmp_name'])) {
        // Contacto administrativo
        $name = strip_tags(trim($_POST["nombre"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["telefono"]);
        $company = trim($_POST["empresa"]);
        $message = trim($_POST["mensaje"]);

        try {
            //Recipients
            $mail->setFrom('mailjetcomsa@gmail.com', 'Correos Comsa Steel');
            $mail->addAddress('dhernandez@comsaestructuras.com');     //Add a recipient
            $mail->addAddress('joserios@comsasteel.com');     //Add extra recipient
            $mail->addReplyTo($email, 'Me interesa recibir más información');

            //Attachments
            //Attach multiple files one by one
            if (isset($_FILES['userfile-1']['tmp_name'])) {
                foreach ($_FILES["userfile-1"]["name"] as $k => $v) {
                    $mail->AddAttachment( $_FILES["userfile-1"]["tmp_name"][$k], $_FILES["userfile-1"]["name"][$k] );
                }
            }

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Nuevo mensaje desde el formulario de contacto';
            $mail->Body    = '<br><br>Nombre: ' . $name . '<br>Correo electrónico: ' . $email . '<br>Teléfono: ' . $phone . '<br>Empresa: ' . $company . '<br><br>Mensaje: ' .  $message . '<br><br>Este mensaje fue enviado a través del formulario de contacto del sitio de Comsa Steel.';

            $mail->send();
            echo 'Gracias por contactarnos, nos comunicaremos contigo a la brevedad.';
        } catch (Exception $e) {
            echo 'Lo sentimos, algo salió mal. Por favor, inténtalo de nuevo. Mailer Error: ' . $mail->ErrorInfo;
        }
    }
?>