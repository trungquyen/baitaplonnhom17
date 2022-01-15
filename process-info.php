<?php
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
    $sql = "INSERT INTO info(first_name, last_name, day, month, year, gender) 
    VALUES ('$first','$last','$day','$month','$year','$gender')";
    // echo $sql;
    $ketqua = mysqli_query($conn,$sql);
    $waring = '';
    if (empty($first) || empty($last)){
        $waring = "Bạn chưa nhập first name hoặc last name";
        header("location: vk.php?waring=$waring");
    }else{
        if(!$ketqua){
            $waring = "Thông tin bạn nhập chưa chính xác";
            header("location: vk.php?waring=$waring"); //Chuyển hướng lỗi
        }else{
            $sql2 = "SELECT id FROM info WHERE first_name = '$first' AND last_name = '$last'";
            echo $sql2;
            $result = mysqli_query($conn,$sql2); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

            // Bước 03: Xử lý kết quả
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $id = $row['id'];
            }
            header("location: signup.php?id=$id"); //Chuyển hướng lại Trang Quản trị
        }
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>