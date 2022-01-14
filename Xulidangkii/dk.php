<?php
    
    if(isset($_POST['btnRegister']) && $_POST['email'])
    {
        $mang = $_POST['id'];
        //B1 Gọi lại kết nối DB Sever
        require "db.php";
        //Thực hiện truy vấn
        $result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
        //Xử lí kết quả
        //kiểm tra email chưa được dùng
        if(mysqli_num_rows($result ) <= 0)
        {
        $token = md5($_POST['email']).rand(10,9999);
        //Lưu thông tin đăng kí  vào CSDL 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $sql2  = "INSERT INTO users(mang,name, email, email_verification_link ,password) VALUES('$mang', '$name','$email','$token','$pass')";
        //echo $sql2;
        mysqli_query($conn, $sql);
        //Yêu cầu người dùng nhấn vào để kích hoạt
        $link = "<a href='http://localhost/dangki/activation.php?key=".$email."&token=".$token."'>Nhấn vào đây để kích hoạt</a>";

        //Gửi email
        include "send_mail.php";
        if(sendEmailForAccountActive($email, $link)){
            echo" Vui lòng kiểm tra lại thông tin đăng kí tài khoản ";
        }else{
            echo "Vui lòng kiểm tra hộp thư của bạn để kích hoạt tài khoản ";
        }
        }else{
        echo "You have already registered with us. Check Your email box and verify email.";
        }
    }



?>