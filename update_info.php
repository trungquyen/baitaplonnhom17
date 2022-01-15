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
    <title>VK ID</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/new.css">
</head>

<?php
    require "template/header.php";
?>

                <div class="col-md-10 mt-3 pe-0">
                    <div class="form-horizontal">
                        <form action="process-update-info.php" method="post">
                            <!-- Nhập họ tên -->
                            <div class="d-flex w-100">
                                <div class="form-group w-50">
                                    <div class="col-md-8 mb-2">
                                        Frist name:
                                        <input type="text" name="textFirstName" class="form-control" id="inputfirstname"
                                            placeholder="Your first name" value="<?php echo $row2['first_name']; ?>"/>
                                    </div>
                                </div>
                                <div class="form-group w-50">
                                    <div class="col-md-8 mb-3">
                                        Last name:
                                        <input type="text" name="textLastName" class="form-control" id="inputlastname"
                                            placeholder="Your last name" value="<?php echo $row2['last_name']; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex w-100">
                                <!-- Ngày sinh -->
                                <div class="form-group w-50">
                                    <label for="inputdateofbirth" class="col-md-4 control-label d-flex mb-2">
                                        Birthday
                                        <i class="ps-1 bi bi-question-circle"></i>
                                    </label>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <!-- Ngày -->
                                            <div class="col-md-4">
                                                <select name="Day" class="form-select">
                                                    <option value="<?php echo $row2['day'] ?>">
                                                        <?php echo $row2['day'];?>
                                                    </option>
                                                    <option value="">Day</option>
                                                    <?php
                                                    for($i=1;$i<=31;$i++)
                                                    {
                                                        echo '<option value='.$i.'>'.$i.'</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <!-- Tháng -->
                                            <div class="col-md-4 px-0">
                                                <select class="form-select" name="Month">
                                                    <option value="<?php echo $row2['month'] ?>">
                                                        <?php echo $row2['month'];?>
                                                    </option>
                                                    <option value="">Month</option>
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>
                                                </select>
                                            </div>
                                            <!-- Năm -->
                                            <div class="col-md-4">
                                                <select name="Year" class="form-select">
                                                    <option selected value="<?php echo $row2['year'] ?>">
                                                        <?php echo $row2['year']; ?>
                                                    </option>
                                                    <option value="">Year</option>
                                                    <?php
                                                    for($i=1901;$i<=2008;$i++)
                                                    {
                                                        echo '<option value='.$i.'>'.$i.'</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Giới tính -->
                                <div class="form-group w-50">
                                    <label for="inputgender" class="col-md-5">
                                        Your gender</label>
                                    <div class="col-md-8 mt-2">
                                        <select class="form-select" name="gender">
                                            <option selectedvalue="">
                                                <?php echo $row2['gender'];?>
                                            </option>
                                            <option value="">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block my-3" name="btnSave">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
    require "template/footer.php";
?>