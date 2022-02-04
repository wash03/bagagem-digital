<?php
    //Variáveis
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');
    
     //Compo E-mail
    $arquivo = "
    <html>
        <p><b>Nome: </b>$nome</p>
        <p><b>E-mail: </b>$email</p>
        <p><b>Telefone: </b>$telefone</p>
        <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
    ";

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {

        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'server1.livrehost.net.br';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'site@bagagem.digital';                     //SMTP username
        $mail->Password   = 'Bagagem2021@';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;     

        //Recipients
        $mail->setFrom('wstsilva@outlook.com.br', 'Site Bagagem');
        $mail->addAddress('wstsilva@outlook.com.br');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Contato - site bagagem';
        $mail->Body    = $arquivo;

        $mail->send();
        echo 'Email enviado com sucesso!';
        
    } catch (Exception $e) {
        echo "Email não enviado.";
    }


?>