<?php

//b1:import đoạn cấu hình 
require 'dbConfig.php';
$statusMsg = ''; // tạo 1 biến để lưu lại trạng thái upload nhằm mục đích phản hồi lại người dùng

//thiết lập để chuẩn bị upload
$targetDir = "uploads/";// thư mực lưu giữ tệp tin
$fileName = basename($_FILES["file"]["name"]);//$_FILES là 1 biến toàn cục lưu trữ toàn bộ phần tử

$targetFilePath = $targetDir . $fileName;// tên đầy đủ và đường dẫn tệp tin

$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//định dạng của tệp tin

//b2: kiểm tra người dùng đã nhấm sibmit chưa
if(isset($_POST["sbmUpload"]) && !empty($_FILES["file"]["name"])){
    // khai báo biến mảng đê lưu trữ định dang mà bạn cho phép upload
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){//in_array kiểm tra 1 giá trị có thuộc mảng hay ko?
        //lưu đường dẫn vào csdl
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header("location: id.php");
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>