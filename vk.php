<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome! | VK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/vk.css">
</head>

<body>
    <header class="fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 px-0">
                    <nav class="navbar navbar-light py-0">
                        <div class="navbar-header w-100 px-0">
                            <a class="navbar-brand" >
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 14.4C0 7.61 0 4.22 2.1 2.1 4.23 0 7.62 0 14.4 0h1.2c6.79 0 10.18 0 12.3 2.1C30 4.23 30 7.62 30 14.4v1.2c0 6.79 0 10.18-2.1 12.3C25.77 30 22.38 30 15.6 30h-1.2c-6.79 0-10.18 0-12.3-2.1C0 25.77 0 22.38 0 15.6v-1.2z"
                                        fill="#07F"></path>
                                    <path
                                        d="M15.96 21.61c-6.84 0-10.74-4.68-10.9-12.48H8.5c.11 5.72 2.63 8.14 4.63 8.64V9.13h3.23v4.93c1.97-.21 4.05-2.46 4.75-4.94h3.22a9.53 9.53 0 01-4.38 6.23 9.87 9.87 0 015.13 6.26h-3.55c-.76-2.37-2.66-4.21-5.17-4.46v4.46h-.39z"
                                        fill="#fff"></path>
                                </svg>
                            </a>
                            <form class="d-flex">
                                <div class="header__search">
                                    <i class="bi bi-search"></i>
                                    <input class="form-control me-2 header__search-input" type="search" placeholder="Search"
                                        aria-label="Search">
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mt-3 ps-0">
                    <div class="main__item">
                        <div class="">
                            <h2>VK for mobile devices</h2>
                            <p>Install our official mobile app and stay in touch with your friends anytime and anywhere.</p>
                        </div>
                        <div class="link-download">
                            <a href="https://play.google.com/store/apps/details?id=com.vkontakte.android" class="link-download__img">
                                <img src="images/android.png" alt="" class="pb-3">
                                <span class="link-download__img-button w-75">
    
                                    VK for Android
                                </span>
                            </a>
                            <a href="https://apps.apple.com/app/id564177498" class="link-download__img">
                                <img src="images/iphone.png" alt="">
                                <span class="link-download__img-button w-75">
                                    <i class="bi bi-apple"></i>
                                    VK for iOS
                                </span>
                            </a>
                        </div>
                        <div class="link-product mt-4">
                            <a href="">
                                <span>All products</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-3">

                    <div class="form-horizontal">
                        <form action="process-signin.php" method="post">
                            <div class="col-md-8 mt-4 mb-3 w-100">
                                <input type="email" placeholder="Phone or Email"
                                    id="txtEmail" name="txtEmail" class="form-control" required autofocus/>
                            </div>
    
                            <!-- Password input -->
                            <div class="col-md-8 mb-3 w-100">
                                <input type="password" placeholder="Password" 
                                    id="txtPass" name="txtPass" class="form-control" required/>
                            </div>
    
                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4 d-flex">
                                <div class="col d-flex">
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block btnSignIn" name="btnSignIn">Sign in</button>
                                    <!-- Simple link -->
                                    <a href="" class="d-block btnForgot" name="btnForgot">Forgot your password?</a>
                                </div>
                                <?php
                                    if(isset($_GET['error'])){
                                        echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                                    }
                                ?>
                            </div>
                        </form>
                    </div>

                    <div class="form-horizontal mt-4">
                        <form action="process-info.php" method="post">
                            <div class="jionFrom__header d-block text-center">
                                <h4>First time here?</h4>
                            </div>
                            <div class="jionFrom__subheader d-block text-center">
                                <p>Sign up for VK</p>  
                            </div>
                            <!-- Nhập họ tên -->
                            <div class="form-group">
                                <div class="col-md-8 mb-2 w-100">
                                    <input type="text" name="textFirstName" class="form-control" id="inputfirstname"
                                        placeholder="Your first name" required autofocus/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 mb-3 w-100">
                                    <input type="text" name="textLastName" class="form-control" id="inputlastname"
                                        placeholder="Your last name" required autofocus/>
                                </div>
                            </div>
                            <!-- Ngày sinh -->
                            <div class="form-group">
                                <label for="inputdateofbirth" class="col-md-4 control-label d-flex mb-2">
                                    Birthday
                                    <i class="ps-1 bi bi-question-circle"></i>
                                </label>
                                <div class="col-md-8 w-100">
                                    <div class="row">
                                        <!-- Ngày -->
                                        <div class="col-md-4">
                                            <select name="Day" class="form-select">
                                                <option selected value="">Day</option>
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
                                                <option selected value="">Month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="Mars">March</option>
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
                                                <option selected value="">Year</option>
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
                            <div class="form-group">
                                <label for="inputgender" class="col-md-5 mt-3">
                                    Your gender</label>
                                <div class="col-md-8">
                                    <select class="form-select" name="gender" class="w-10">
                                            <option selected value="">Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                    </select>
                                    <!-- <label>
                                        <input type="text" name="gender" class="w-50">
                                        Female
                                    </label> -->
                                    <!-- <label class="ms-2">
                                        <input type="radio" name="gender">
                                        Male
                                    </label> -->
                                </div>
                            </div>
    
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block w-100 mt-3" name="btnContinue">
                                    Continue registration
                                </button>
                                <a href="#" class="btn btn-primary w-100 mt-3 mb-4" role="button" aria-disabled="true">
                                    <i class="bi bi-facebook"></i>
                                    Sign in with Facebook
                                </a>
                            </div>
                        </form>
                    </div>

                    <div class="form-horizontal mt-4 d-block text-center">
                        <p class="sigin__label">After signing up, you'll get access to all of VK ID's features</p>
                        <a href="" class="sigin__link">Learn more</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-5 mb-5">
                    <div class="main__footer">
                        <div class="footer__copy">
                            <a href="">VK</a>
                            " © 2006–2021
                        </div>
                        <div class="footer__link">
                            <a href="">AboutVK</a>
                            <a href="">Temrs</a>
                            <a href="">Developers</a>
                        </div>
                        <div class="footer__lang">
                            <a href="">Tiếng việt</a>
                            <a href="">Русский</a>
                            <a href="">Українська</a>
                            <a href="">English</a>
                            <a href="">All languages</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>