<?php
    session_start();
    if (isset($_SESSION['isLoginOK'])){
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','vkcom');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT id FROM users WHERE email = '{$_SESSION['isLoginOK']}'";

        $result = mysqli_query($conn,$sql); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

        // Bước 03: Xử lý kết quả
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            // $ma_donvi = $row['ma_donvi'];
        }

        // Bước 04: Đóng kết nối
        mysqli_close($conn);
    }
    // Xử lý giá trị GỬI TỚI

    if(isset($_POST['textFirstName'])){
        $first = $_POST['textFirstName'];
    }
    if(isset($_POST['textLastName'])){
        $last  = $_POST['textLastName'];
    }

    $day = $_POST['Day'];
    $month = $_POST['Month'];
    $year = $_POST['Year'];
    $gender = $_POST['gender'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','vkcom');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE info SET first_name = '$first', last_name = '$last', day = '$day', month = '$month', year ='$year', gender = '$gender' WHERE id = '{$row['id']}'";
    //echo $sql;

    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: update_info.php");
    }else{
        header("location: id.php");
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>