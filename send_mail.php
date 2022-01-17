<?php
    $username = 'koykk2011@gmail.com';

    $password = 'nznxciqhyawmfqjl';

     // thư viện xử lý gửi nhận email: phpmailer, sendmail
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\Exception;
     use PHPMailer\PHPMailer\SMTP;

     // bước 1: khai báo thư viện
     require 'Phpmail/Exception.php';
     require 'Phpmail/PHPMailer.php';
     require 'Phpmail/SMTP.php';

     // bước 2: sử dụng thư viện này để gửi email đến 1 tài khoản email bất kì
     //Create an instance; passing `true` enables exceptions
     function sendEmailForAccountActive($email, $link){
     global $username;
     global $password;
     $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $username;                              //địa chỉ email đóng vai trò gửi thư
        $mail->Password   = $password;                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom('koykk2011@gmail.com', 'Oanh Le Thi');
        $mail->addAddress($email);     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = '[VK.com] Welcome to VKontakte ';
        $mail->Body    = 'Chào mừng bạn đến với VKontakte , Vui lòng nhấn vào' .$link. 'để kích hoạt tài khoản ';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo ' Email đã được gửi đi. ';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>