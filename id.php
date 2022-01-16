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
    <?php
    if (isset($_SESSION['isLoginOK']))
    {
        echo '<title>'.$row2['first_name'].' '.$row2['last_name'].'</title>';
    }
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/new.css">
    <link rel="stylesheet" href="assets/css/id.css">
</head>

<?php
    require "template/header.php";
?>

                <div class="col-md-3">
                    <div class="page__photo mt-3">

                        <div class="page__avatar__wrap">
                            <aside aria-label="Photo">
                                <div class="page__avatar">
                                    <a href="">
                                        <img class="page__avatar__img" src="assets/images/camera_200.png" alt="">
                                    </a>
                                </div>
                            </aside>
                            <a href="" class="page__load__avatar">
                                Update a profile photo
                            </a>
                        </div>

                        <div class="page__actions">
                            <a href="" class="page__actions__button">
                                <span>Edit</span>
                            </a>
                        </div>

                        <div class="page__actions__expanded">
                            <a href="" class="d-block page__actions__item">
                                <i class="bi bi-clock-history page__actions__icon"></i>
                                Memories
                            </a>
                            <a href="" class="d-block page__actions__item">
                                <i class="bi bi-credit-card page__actions__icon"></i>
                                Money transfers
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 px-0 mt-3">

                    <div class="page__info">
                        <div class="page__top">
                            <div class="page__online">
                                <span>online</span>
                            </div>
                            <?php
                            if (isset($_SESSION['isLoginOK']))
                            {
                                echo '<h3 class="page__name">'.$row2['first_name'].' '.$row2['last_name'].'</h3>';
                            }
                            ?>
                            <div class="page__status">
                                <a href="">
                                    Set status
                                </a>
                            </div>
                        </div>
                        <div class="page__info__short">
                            <div class="page__info__row">
                                <h5 class="label">Birthday:</h5>
                                <div class="labeled">
                                <?php
                                    echo '<a href="">'.$row2['month'].' '.$row2['day'].'</a>, ';
                                    echo '<a href="">'.$row2['year'].'</a>';
                                ?>
                                </div>
                            </div>
                            <div class="page__info__row">
                                <h5 class="label">Current city:</h5>
                                <div class="labeled">
                                    <a href="">Hanoi</a>
                                </div>
                            </div>
                            <div class="page__more__info">
                                <a href="" class="page__label">
                                    <span>Show full information</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="page__camera mt-3">
                        <a href="" class="page__camera__button">
                            <i class="page__camera__icon bi bi-camera-fill"></i>
                            Add photos
                        </a>
                    </div>

                    <div class="submit__post d-flex mt-3">
                        <a href="">
                            <img src="assets/images/camera.png" alt="" class="submit__post--img">
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

                    <div class="wall__module mt-3">
                        <div class="wall__module__h2">
                            <ul class="ul__tabs">
                                <li class="wall__label">All posts</li>
                                <li class="wall__label">My posts</li>
                                <li class="wall__label">Post archire</li>
                            </ul>
                        </div>
                        <!-- <div class="wall__module__posts" >
                            <div class="no__posts">
                                <img src="images/no_posts.png" alt="" class="no__posts__img">
                                There are no posts here yet
                            </div>
                        </div> -->
                        <div class="post__content">
                            <div class="post__header">
                                <a href=""  class="post__header--img">
                                    <img src="assets/images/camera.png" alt="">
                                </a>
                                <div class="post__header__info">
                                    <?php
                                        echo '<a href="" class="post__header__name">'.$row2['first_name'].' '.$row2['last_name'].'</a>';
                                    ?>
                                    <div class="post__header__timer">
                                        <a href="">
                                            50 minutes ago
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="post__text">
                                <div class="post__text__content">
                                    <div class="post__text--img">
                                        <a href="" class="post__images">
                                            <img src="assets/images/5bc80b7118fc19ef01f794cd3cd1c292_7588232553038590545.png" alt="">
                                        </a>
                                    </div>
                                    <div class="likes__buttn">
                                        <div class="likes_cons">
                                            <div class="buttn__icon">
                                                <i class="icon--item bi bi-heart"></i>
                                            </div>
                                            <div class="buttn__icon">
                                                <i class="icon--item bi bi-chat-left"></i>
                                            </div>
                                            <div class="buttn__icon">
                                                <i class="icon--item bi bi-share"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </main>

<?php
    require "template/footer.php";
?>
