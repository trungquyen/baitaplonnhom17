<?php
if(isset($_POST['btnRegister']) && $_POST['email'])
{
  //B1 Gọi lại kết nối DB Sever
require "dp.php";
//Thực hiện truy vấn
$result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
//Xử lí kết quả
//kiểm tra email được dùng hay chưa 
if(mysqli_num_rows($result ) >= 0)
{
$token = md5($_POST['email']).rand(10,9999);
//Lưu thông tin  vào CSDL 
$email = $_POST['email'];
//Yêu cầu người dùng nhấn vào để kích hoạt
$link = "<a href='http://localhost/baitaplonnhom17-main/pass.php?key=".$email."&token=".$token."'>Nhấn vào đây</a>";

//Gửi email
include "send_email.php";
if(sendEmailForAccountActive($email, $link)){
  echo"Email chưa tồn tại . Vui lòng kiểm tra lại thông tin email đã đăng kí tài khoản của bạn ";
}else{
  echo "Vui lòng kiểm tra hộp thư của bạn để thay đổi mật khẩu  ";
}

/*
require_once('phpmail/PHPMailerAutoload.php');
$mail = new PHPMailer();
$mail->CharSet =  "utf-8";
$mail->IsSMTP();
// enable SMTP authentication
$mail->SMTPAuth = true;                  
// GMAIL username
$mail->Username = "your_email_id@gmail.com";
// GMAIL password
$mail->Password = "your_gmail_password";
$mail->SMTPSecure = "ssl";  
// sets GMAIL as the SMTP server
$mail->Host = "smtp.gmail.com";
// set the SMTP port for the GMAIL server
$mail->Port = "465";
$mail->From='your_gmail_id@gmail.com';
$mail->FromName='your_name';
$mail->AddAddress('reciever_email_id', 'reciever_name');
$mail->Subject  =  'Reset Password';
$mail->IsHTML(true);
$mail->Body    = 'Click On This Link to Verify Email '.$link.'';
if($mail->Send())
{
echo "Check Your Email box and Click on the email verification link.";
}
else
{
echo "Mail Error - >".$mail->ErrorInfo;
}
}
*/

}else{
echo "You have already registered with us. Check Your email box and verify email.";
}
}


?>