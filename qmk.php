<?php
if(isset($_POST['btnRegister']) && $_POST['email'])
{
  //B1 Gọi lại kết nối DB Sever
require "dp.php";
//Thực hiện truy vấn
$result = mysqli_query($conn,"SELECT * FROM users WHERE email='" . $_POST['email'] . "'");
//Xử lí kết quả
//kiểm tra email 
if(mysqli_num_rows($result ) > 0)
{
//Lưu thông tin mk  vào CSDL 
$email = $_POST['email'];
$pass = password_hash($_POST['password'],PASSWORD_DEFAULT);
$sql  = "UPDATE users set password ='$pass'  where email='$email'";
mysqli_query($conn, $sql);
}else{
    echo "
    Please check your email account again";
    }

      //Kiểm tra xem Mật khẩu đã được cập nhật chưa   
 if($row['password']=$pass){
  $Notification="Bạn đã cật nhật mật khẩu thành công";
  header("location: vk.php?$Notification");
}else{
$Notification="Bạn chưa cập nhật mật khẩu của mình . Vui lòng kiểm tra lại";
header("location: qmk.php?$Notification");
}
}
?>