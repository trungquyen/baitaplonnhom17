<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnSignIn'])){
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPass'];
        
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','vkcom');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }

        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM users WHERE email='$email' ";
        // echo $sql;
        
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $pass_hash = $row['password'];//lấy ra mật khẩu chuỗi dạng băm trong CSDL
            if(password_verify($pass,$pass_hash)){
                $_SESSION['isLoginOK'] = $email;
                header("location: New.php"); //Chuyển hướng lại Trang Quản trị
            }else{
                $error="Mật khẩu không chính xác";
                header("location: login.php?error=$error"); //Trả lại thông báo lỗi
            }

        }else{
            $error="Email không tồn tại";
            header("location: login.php?error=$error"); //Trả lại thông báo lỗi
        }
        
    
        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:vk.php");
    }
?>