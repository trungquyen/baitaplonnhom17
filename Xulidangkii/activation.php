<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php 
        if($_GET['key'] && $_GET['token']) //Kiểm tra có giá trị trên URL
        {
            //B1 Kết nối DB Server
            require "db.php";
            //B2 Thực hiện truy vấn 
            $email = $_GET['key'];  // Bắt giá trị trên biến URL
            $token = $_GET['token'];
            $sql = "SELECT * FROM `users` WHERE `email_verification_link`='".$token."' and `email`='".$email."'";
            $query = mysqli_query($conn,$sql);
            $d = date('Y-m-d H:i:s'); //Tạo ra 1 biến lưu thời gian
            if (mysqli_num_rows($query) > 0) { //kiểm tra thông tin trong CSDL xem có khớp với bản ghi nào không 
                $row= mysqli_fetch_array($query);//Lấy ra thông tin bản ghi này 
                if($row['email_verified_at'] == NULL){ //Kiểm tra lại nếu bạn chưa kích hoạt
                    mysqli_query($conn,"UPDATE users set email_verified_at = '$d' , status = 1 WHERE email= '$email '");
                    $msg = "Congratulations ! Your email has been verified . Your Vkontakte(Vk.com) Account has been successfully registered.";
                }else{
                    $msg = "You have already verified your account with us";
                }
            } else {
            $msg = "This email has been not registered with us";
            }
        }
        else
        {
        $msg = "Danger! Your something goes to wrong.";
        }
        ?>
        <div class="container mt-3">
            <div class="card">
                <div class="card-header text-center">
                <img src="image/vk_logo.png" alt="" width="30" height="30">    Welcome to VKontakte(Vk.com)
                </div>
                <div class="card-body">
                    <p>
                        <?php echo $msg; ?>
                    </p>
                </div>
            </div>
        </div>
</body>

</html>