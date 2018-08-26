<?php
    $to = 'pjuanluis97@gmail.com';
    $firstname = $_POST["fname"];
    $subject= $_POST["subject"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$firstname.'  '.'</td>
        </tr>
        <tr><td>Subject: '.$subject.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Email: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo '<h5 class="alert-sucess">El mensaje ha sido enviado.</h5>';
    }else{
        echo '<h5 class="alert-danger">Ocurrió un error al mandar el mensaje, intente nuevamente.</h5>';
    }

?>
