<?php
    // trước khi cho người dùng vào bên trong
    // phải kiểm tra thẻ làm việc
    session_start();
    if (!isset($_SESSION['isLoginOK'])){
        header("location:vk.php");
    }

    if (isset($_SESSION['isLoginOK'])){
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','vkcom');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM users WHERE email = '{$_SESSION['isLoginOK']}'";

        $result = mysqli_query($conn,$sql); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

        // Bước 03: Xử lý kết quả
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            // $ma_donvi = $row['ma_donvi'];
        }

        // Bước 04: Đóng kết nối
        mysqli_close($conn);
    }

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','vkcom');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql2 = "SELECT * FROM info WHERE id = '{$row['id']}'";

    $result2 = mysqli_query($conn,$sql2); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

    // Bước 03: Xử lý kết quả
    if(mysqli_num_rows($result2) > 0){
        $row2 = mysqli_fetch_assoc($result2);
        // $ma_donvi = $row['ma_donvi'];
    }

    // Bước 04: Đóng kết nối
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/New.css">
</head>

<?php
    require "template/header.php";
?>

                <div class="col-md-7 mt-3">
                    <div class="submit__post d-flex">
                        <a href="">
                            <img src="images/camera.png" alt="" class="submit__post--img">
                        </a>
                        <div class="submit__post--tools d-flex">
                            <span class="d-block">What's new?</span>
                            <div class="submit__post--media d-block ms-auto">
                                <a href="">
                                    <i class="bi bi-camera"></i>
                                </a>
                                <a href="">
                                    <i class="bi bi-play-circle"></i>
                                </a>
                                <a href="">
                                    <i class="bi bi-music-note-beamed"></i>
                                </a>
                                <a href="">
                                    <i class="bi bi-card-text"></i>
                                </a>
                            </div>
                            <div class="submit__sitposting">
                                <div class="submit__wall"></div>
                                <a href="">
                                    <i class="bi bi-lightbulb"></i>
                                </a>
                            </div>
                            <a href="" class="submit__lock">
                                <i class="bi bi-lock"></i>
                            </a>
                        </div>
                    </div>

                    <div class="post__stories mt-3">
                        <div class="post__stories--label d-flex">
                            Stories
                            <div class="post__stories--settings ms-auto">
                                <a href="">
                                    Settings
                                </a>
                            </div>
                        </div>
                        <div class="post__stories__wrap">
                            <div class="post__stories__arrow--left"></div>
                            <div class="post__stories__arrow--right"></div>
                            <div class="post__stories__list">
                                <a href="" class="post__stories--item" style="background-image: url(images/camera.png)">
                                    <div class="post__stories--preview">
                                        <div class="post__stories--add"></div>
                                        <div class="post__stories--name">Story</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 px-0 mt-3">
                    <div class="narrow__column__wrap">
                        <div class="narrow__column">
                            <div class="narrow__menu">
                                <a href="" class="d-block narrow__column--item">News</a>
                                <a href="" class="d-block narrow__column--item">Recommended</a>
                                <a href="" class="d-block narrow__column--item">Search</a>
                                <div class="narrow__wall"></div>
                                <a href="" class="d-block narrow__column--item">Reactions</a>
                                <a href="" class="d-block narrow__column--item">Updates</a>
                                <a href="" class="d-block narrow__column--item">Comments</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="narrow__column__turn-on mt-3">
                        Interesting at the top
                        <div class="turn-on-off"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
    require "template/footer.php";
?>