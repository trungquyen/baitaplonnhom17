<?php
    // trước khi cho người dùng vào bên trong
    // phải kiểm tra thẻ làm việc
    session_start();
    if (!isset($_SESSION['isLoginOK'])){
        header("location:vk.php");
    }
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/friend.css">
</head>

<body>
    <header class="fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 px-0">
                    <nav class="navbar navbar-light py-0">
                        <div class="navbar-header w-100 px-0">
                            <a class="navbar-brand" href="">
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
                                <div class="header__search me-3">
                                    <i class="bi bi-search"></i>
                                    <input class="form-control me-2 header__search-input" type="search"
                                        placeholder="Search" aria-label="Search">
                                </div>
                            </form>

                            <a href="" class="header__notifly d-block">
                                <i class="bi bi-bell"></i>
                            </a>

                            <a href="" class="header__music d-block">
                                <i class="bi bi-music-note-beamed"></i>
                            </a>

                            <!-- <div class="header__audio__player btn-group" role="group" aria-label="Basic outlined example">
                                <button class="header__audio__player--prev">
                                    <i class="header__audio__player--icon bi bi-skip-start-fill"></i>
                                </button>
                                <button class="header__audio__player--play">
                                    <i class="header__audio__player--icon bi bi-caret-right-fill"></i>
                                </button>
                                <button class="header__audio__player--next">
                                    <i class="header__audio__player--icon bi bi-skip-end-fill"></i>
                                </button>
                                <div class="d-block text-center">
                                    <span>
                                        Как в первый раз
                                    </span>
                                </div>
                            </div> -->

                            <a href="" class="header__app d-block ms-auto">
                                <i class="bi bi-grid-3x3-gap-fill"></i>
                            </a>

                            <div class="btn-group">
                                <a type="button" class="btn header__camera" style="color: #adb5bd"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="images/camera.png" alt="" class="header__camera--img">
                                    <i class="header__camera--icon bi bi-caret-down-fill"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <div class="camera--item">
                                            <a href="" class="camera__avatar">
                                                <img src="images/camera.png" alt="" class="camera--img">
                                                <div class="camera--text">
                                                    <?php
                                                        if (isset($_SESSION['isLoginOK']))
                                                        {
                                                            echo '<span class="d-block">'.$_SESSION['isLoginOK'].'</span>';
                                                            echo '<span class="d-block" style="color: #0d6efd">VK ID settings</span>';
                                                        }
                                                    ?>
                                                </div>
                                            </a>
                                            <div class="camera__button">
                                                <a href="" class="camera__button-link">
                                                    <span class="camera__button-label">VK Pay</span>
                                                    <span class="camera__button-label"
                                                        style="color: #0d6efd">Open</span>
                                                </a>
                                                <a href="" class="camera__button-link">
                                                    <span class="camera__button-label">VK Combo</span>
                                                    <span class="camera__button-label"
                                                        style="color: #0d6efd">More</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a class="dropdown-item" href="#">
                                            <i class="bi bi-gear pe-1" style="color: #0d6efd"></i>
                                            Settings
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">
                                            <i class="bi bi-question-circle pe-1" style="color: #0d6efd"></i>
                                            Help
                                        </a></li>
                                    <?php
                                        if (isset($_SESSION['isLoginOK']))
                                        {
                                            echo '<li><a class="dropdown-item" href="signout.php">';
                                            echo '<i class="bi bi-arrow-bar-right pe-1" style="color: #0d6efd"></i>';
                                            echo 'Sign out';
                                            echo '</a></li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <main class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-2 ps-1 mt-3">

                    <ul class="list__row">
                        <li class="list__item">
                            <a href="" class="d-block list-item__row">
                                <i class="list-item__icon bi bi-person-circle"></i>
                                <span>My profile</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="" class="d-block list-item__row">
                                <i class="list-item__icon bi bi-newspaper"></i>
                                <span>News</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="" class="d-block list-item__row">
                                <i class="list-item__icon bi bi-chat"></i>
                                <span>Messenger</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="" class="d-block list-item__row">
                                <i class="list-item__icon bi bi-telephone"></i>
                                <span>Calls</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="" class="d-block list-item__row">
                                <i class="list-item__icon bi bi-people"></i>
                                <span>Friends</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="" class="d-block list-item__row">

                                <span>Communitis</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="" class="d-block list-item__row">
                                <i class="list-item__icon bi bi-image"></i>
                                <span>Photos</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="" class="d-block list-item__row">
                                <i class="list-item__icon bi bi-music-note-list"></i>
                                <span>Music</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="" class="d-block list-item__row">
                                <i class="list-item__icon bi bi-dice-6"></i>
                                <span>Videos</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="" class="d-block list-item__row">
                                <span>Clips</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="" class="d-block list-item__row">
                                <i class="list-item__icon bi bi-controller"></i>
                                <span>Games</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="" class="d-block list-item__row">
                                <span>Classifieds</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="" class="d-block list-item__row">
                                <i class="list-item__icon bi bi-snow"></i>
                                <span>Flury</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <div class="list__wall"></div>
                            <a href="" class="d-block list-item__row">
                                <span>Mini apps</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="" class="d-block list-item__row">
                                <i class="list-item__icon bi bi-paypal "></i>
                                <span>VK Pay</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <div class="list__wall"></div>
                            <a href="" class="d-block list-item__row">
                                <i class="list-item__icon bi bi-star "></i>
                                <span>Bookmarks</span>
                            </a>
                        </li>
                        <li class="list__menu">
                            <div class="list__menu-item">
                                <a href="" class="list__menu-link">Blog</a>
                                <a href="" class="list__menu-link">Developers</a>
                                <a href="" class="list__menu-link">About VK</a>
                                <a href="" class="list__menu-link">
                                    More
                                    <i class="bi bi-caret-down-fill"></i>
                                </a>
                            </div>
                        </li>
                        <li>
                    </ul>






                </div>

                <div class="col-md-7 mt-5 mb-5 friend  ">
                    <div class="friend ">
                        <div class="col-md-12 px-0 mt-3">
                            <a href="" class=" ms-2 all "> All friends </a>
                            <a href="" class="  ms-5 onl"> Friends online </a>
                            <a href="" class="ms-5 find "> <button class="btn btn-primary"> Find friends </button></a>
                        </div>
                        <hr>
                        <div class="col-md-12 px-0 mt-3 parameter">

                            <div class="form-group col-md-9">
                                <input id="exampleFormControlInput5" type="email" placeholder="Search friends?"
                                    class="form-control form-control-underlined">
                            </div>

                            <div class="dropdown_parament">
                                <a class=" dropdown-toggle para ms-4" href="#" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Paratemeter
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end para" aria-labelledby="dropdownMenuLink">

                                    <div class="city">
                                        <Span>City</Span>
                                        <label for="validationDefault04" class="form-label"></label>
                                        <select class="form-select" id="validationDefault04" required>
                                            <option selected disabled value="">Select a city</option>
                                            <option>Ha noi</option>
                                            <option>Thanh Hoa</option>
                                            <option>Hoa Binh</option>
                                        </select>
                                    </div>

                                    <div class="age mt-3">
                                        <div class="form">
                                            <span>Age</span>
                                            <label for="validationDefault04" class="form-label"></label>
                                            <select class="form-selec" id="validationDefault04" required>
                                                <option selected disabled value="">From</option>
                                                <option>From 14</option>
                                                <option>From 15</option>
                                                <option>From 16</option>
                                                <option>From 17</option>
                                                <option>From 18</option>
                                                <option>From 19</option>
                                                <option>From 20</option>
                                                <option>From 21</option>
                                                <option>From 22</option>
                                                <option>From 22</option>
                                                <option>From 23</option>
                                                <option>From 24</option>
                                                <option>From 25</option>
                                                <option>From 26</option>
                                                <option>From 27</option>
                                                <option>From 28</option>
                                                <option>From 29</option>
                                                <option>From 30 </option>
                                                <option>From 31 </option>
                                                <option>From 32</option>
                                                <option>From 33</option>
                                                <option>From 34</option>
                                                <option>From 35</option>
                                                <option>From 36</option>
                                                <option>From 37</option>
                                                <option>From 38</option>
                                                <option>From 39</option>
                                                <option>From 40</option>


                                            </select>
                                        </div>

                                        <div class="to">
                                            <label for="validationDefault04" class="form-label"></label>
                                            <select class="form-selec" id="validationDefault04" required>
                                                <option selected disabled value="">To</option>
                                                <option>To 14</option>
                                                <option>To 15</option>
                                                <option>To 16</option>
                                                <option>To 17</option>
                                                <option>To 18</option>
                                                <option>To 19</option>
                                                <option>To 20</option>
                                                <option>To 21</option>
                                                <option>To 22</option>
                                                <option>To 22</option>
                                                <option>To 23</option>
                                                <option>To 24</option>
                                                <option>To 25</option>
                                                <option>To 26</option>
                                                <option>To 27</option>
                                                <option>To28</option>
                                                <option>To 29</option>
                                                <option>To 30 </option>
                                                <option>To 31 </option>
                                                <option>To 32</option>
                                                <option>To 33</option>
                                                <option>To 34</option>
                                                <option>To 36</option>
                                                <option>To37</option>
                                                <option>To 38</option>
                                                <option>To 39</option>
                                                <option>To 40</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="Gender mt-3">
                                        <span>Gender</span>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio" checked>Male</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio">Female</label>
                                        </div>
                                        <div class="radio disabled">
                                            <label><input type="radio" name="optradio">Any</label>
                                        </div>
                                    </div>
                                </ul>
                            </div>

                        </div>

                        <div class="frien">
                            <div class="col-md-12 px-0 mt-3 ">
                                <div class="onefr">
                                    <img class="friends_photo_img width col-md-2 ms-2 " alt="Dat Van " width="100"
                                        height="60" src="images/camera.png">
                                    <div class="col-md-4 ms-5 ">
                                        <div class="Name">
                                            <a href="id.php" class="name_mess"> Hoang Vu</a>
                                        </div>
                                        <div class="call_friend">
                                            <a href="" class="mess">Write message</a>
                                            <span> . </span>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle para" href="#" id="dropdownMenuLink"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="call ms-2"> Call</span>
                                                </a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <div class="voice_call">
                                                        <i class="bi bi-telephone ms-2"></i>
                                                        <span class="ms-2">Voice call</span>
                                                    </div>
                                                    <div class="video_call mt-2">
                                                        <i class="bi bi-camera-video ms-2"></i>
                                                        <span class="ms-2">Video call</span>
                                                    </div>
                                                    <div class="call_on_app mt-2">
                                                        <i class="bi bi-arrow-up-right-square ms-2"></i>
                                                        <span class="ms-2">Call on app</span>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown_more">
                                        <a class=" ms-5" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="bi bi-three-dots icon_more"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                            <div class="myfriend">
                                                <a href="" class=" ms-3 myfriend "> Show friends </a>
                                            </div>
                                            <div class="myfriend">
                                                <a href="" class=" ms-3 mt-2 myfriend "> Suggest friends </a>
                                            </div>
                                            <hr>
                                            <div class="myfriend">
                                                <a href="" class=" ms-3 myfriend "> Unfriends </a>
                                            </div>
                                            <hr>

                                            <div class="dropdown">
                                                <a class=" dropdown-toggle para ms-3  " href="#" id="dropdownMenuLink"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Edit Friends
                                                </a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item" href="#">Best friends</a></li>
                                                    <li><a class="dropdown-item" href="#">Family</a></li>
                                                    <li><a class="dropdown-item" href="#">Colleagues</a></li>
                                                    <li><a class="dropdown-item" href="#">University friends</a> </li>
                                                    <li><a class="dropdown-item" href="#">School friends</a></li>
                                                    <li><button class="btn-group create  ms-3"> Create new list</button>
                                                    </li>

                                                </ul>
                                            </div>

                                        </ul>
                                    </div>





                                </div>


                                <hr>
                                <div class="onefr">
                                    <img class="friends_photo_img width col-md-2 ms-2 " alt="Quyet Nguyen " width="100"
                                        height="60" src="images/camera.png">
                                    <div class="col-md-4 ms-5 ">
                                        <div class="Name">
                                            <a href="id.php" class="name_mess"> Trung Quyen</a>
                                        </div>
                                        <div class="call_friend">
                                            <a href="" class="mess">Write message</a>
                                            <span> . </span>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle para" href="#" id="dropdownMenuLink"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="call ms-2"> Call</span>
                                                </a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <div class="voice_call">
                                                        <i class="bi bi-telephone ms-2"></i>
                                                        <span class="ms-2">Voice call</span>
                                                    </div>
                                                    <div class="video_call mt-2">
                                                        <i class="bi bi-camera-video ms-2"></i>
                                                        <span class="ms-2">Video call</span>
                                                    </div>
                                                    <div class="call_on_app mt-2">
                                                        <i class="bi bi-arrow-up-right-square ms-2"></i>
                                                        <span class="ms-2">Call on app</span>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown_more">
                                        <a class=" ms-5" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="bi bi-three-dots icon_more"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                            <li class="myfriend">
                                                <a href="" class=" ms-3 myfriend "> Show friends </a>
                                            </li>
                                            <li class="myfriend">
                                                <a href="" class=" ms-3 mt-2 myfriend "> Suggest friends </a>
                                            </li>
                                            <hr>
                                            <li class="myfriend">
                                                <a href="" class=" ms-3 myfriend "> Unfriends </a>
                                            </li>
                                            <hr>
                                            <li>
                                                <div class="dropdown">
                                                    <a class=" dropdown-toggle para ms-3 " href="#"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Edit Friends
                                                    </a>

                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item" href="#">Best friends</a></li>
                                                        <li><a class="dropdown-item" href="#">Family</a></li>
                                                        <li><a class="dropdown-item" href="#">Colleagues</a></li>
                                                        <li><a class="dropdown-item" href="#">University friends</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">School friends</a></li>
                                                        <li><button class="btn-group create  ms-3"> Create new
                                                                list</button></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                                <hr>
                                <div class="onefr">
                                    <img class="friends_photo_img width col-md-2 ms-2 " alt="Trung Quyen" width="100"
                                        height="60" src="images/camera.png">
                                    <div class="col-md-4 ms-5 ">
                                        <div class="Name">
                                            <a href="id.php" class="name_mess"> Minh Quang</a>
                                        </div>
                                        <div class="call_friend">
                                            <a href="" class="mess">Write message</a>
                                            <span> . </span>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle para" href="#" id="dropdownMenuLink"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="call ms-2"> Call</span>
                                                </a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <div class="voice_call">
                                                        <i class="bi bi-telephone ms-2"></i>
                                                        <span class="ms-2">Voice call</span>
                                                    </div>
                                                    <div class="video_call mt-2">
                                                        <i class="bi bi-camera-video ms-2"></i>
                                                        <span class="ms-2">Video call</span>
                                                    </div>
                                                    <div class="call_on_app mt-2">
                                                        <i class="bi bi-arrow-up-right-square ms-2"></i>
                                                        <span class="ms-2">Call on app</span>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown_more">
                                        <a class=" ms-5" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="bi bi-three-dots icon_more"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                            <li class="myfriend">
                                                <a href="" class=" ms-3 myfriend "> Show friends </a>
                                            </li>
                                            <li class="myfriend">
                                                <a href="" class=" ms-3 mt-2 myfriend "> Suggest friends </a>
                                            </li>
                                            <hr>
                                            <li class="myfriend">
                                                <a href="" class=" ms-3 myfriend "> Unfriends </a>
                                            </li>
                                            <hr>
                                            <li>
                                                <div class="dropdown">
                                                    <a class=" dropdown-toggle para ms-3 " href="#"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Edit Friends
                                                    </a>

                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item" href="#">Best friends</a></li>
                                                        <li><a class="dropdown-item" href="#">Family</a></li>
                                                        <li><a class="dropdown-item" href="#">Colleagues</a></li>
                                                        <li><a class="dropdown-item" href="#">University friends</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">School friends</a></li>
                                                        <li><button class="btn-group create  ms-3"> Create new
                                                                list</button></li>

                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="onefr">
                                    <img class="friends_photo_img width col-md-2 ms-2 " alt="Diep Tran" width="100"
                                        height="60" src="images/camera.png">
                                    <div class="col-md-4 ms-5 ">
                                        <div class="Name">
                                            <a href="id.php" class="name_mess"> Anh Tu</a>
                                        </div>
                                        <div class="call_friend">
                                            <a href="" class="mess">Write message</a>
                                            <span> . </span>
                                            <div class="dropdown">
                                                <a class="dropdown-toggle para" href="#" id="dropdownMenuLink"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="call ms-2"> Call</span>
                                                </a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <div class="voice_call">
                                                        <i class="bi bi-telephone ms-2"></i>
                                                        <span class="ms-2">Voice call</span>
                                                    </div>
                                                    <div class="video_call mt-2">
                                                        <i class="bi bi-camera-video ms-2"></i>
                                                        <span class="ms-2">Video call</span>
                                                    </div>
                                                    <div class="call_on_app mt-2">
                                                        <i class="bi bi-arrow-up-right-square ms-2"></i>
                                                        <span class="ms-2">Call on app</span>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dropdown_more">
                                        <a class=" ms-5" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="bi bi-three-dots icon_more"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                            <li class="myfriend">
                                                <a href="" class=" ms-3 myfriend "> Show friends </a>
                                            </li>
                                            <li class="myfriend">
                                                <a href="" class=" ms-3 mt-2 myfriend "> Suggest friends </a>
                                            </li>
                                            <hr>
                                            <li class="myfriend">
                                                <a href="" class=" ms-3 myfriend "> Unfriends </a>
                                            </li>
                                            <hr>
                                            <li>
                                                <div class="dropdown">
                                                    <a class=" dropdown-toggle para ms-3 " href="#"
                                                        id="dropdownMenuLink" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        Edit Friends
                                                    </a>

                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item" href="#">Best friends</a></li>
                                                        <li><a class="dropdown-item" href="#">Family</a></li>
                                                        <li><a class="dropdown-item" href="#">Colleagues</a></li>
                                                        <li><a class="dropdown-item" href="#">University friends</a>
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">School friends</a></li>
                                                        <li><button class="btn-group create  ms-3"> Create
                                                                newlist</button></li>

                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mt-5 mb-5 ">
                    <div class="friend_list">
                        <div class="know">
                            <div class="myfriend">
                                <a href="" class=" ms-2 myfriend_my "> My friends </a>
                                <div class="dropdown">
                                    <a class=" ms-5" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="bi bi-calendar-minus calender"></i>
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <div class="container">
                                            <div class="row">
                                                <div class="span12">
                                                    <table class="table-condensed table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="7">
                                                                    <a class="btn"><i class="icon-chevron-left"></i></a>
                                                                    <a class="btn">February 2012</a>
                                                                    <a class="btn"><i
                                                                            class="icon-chevron-right"></i></a>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th>Su</th>
                                                                <th>Mo</th>
                                                                <th>Tu</th>
                                                                <th>We</th>
                                                                <th>Th</th>
                                                                <th>Fr</th>
                                                                <th>Sa</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="muted">29</td>
                                                                <td class="muted">30</td>
                                                                <td class="muted">31</td>
                                                                <td>1</td>
                                                                <td>2</td>
                                                                <td>3</td>
                                                                <td>4</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>6</td>
                                                                <td>7</td>
                                                                <td>8</td>
                                                                <td>9</td>
                                                                <td>10</td>
                                                                <td>11</td>
                                                            </tr>
                                                            <tr>
                                                                <td>12</td>
                                                                <td>13</td>
                                                                <td>14</td>
                                                                <td>15</td>
                                                                <td>16</td>
                                                                <td>17</td>
                                                                <td>18</td>
                                                            </tr>
                                                            <tr>
                                                                <td>19</td>
                                                                <td><strong>20</strong></td>
                                                                <td>21</td>
                                                                <td>22</td>
                                                                <td>23</td>
                                                                <td>24</td>
                                                                <td>25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>26</td>
                                                                <td>27</td>
                                                                <td>28</td>
                                                                <td>29</td>
                                                                <td class="muted">1</td>
                                                                <td class="muted">2</td>
                                                                <td class="muted">3</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="myfriend">
                                <a href="" class=" ms-2 mt-2 myfriend "> Find friends </a>
                            </div>
                            <hr>

                            <div class="dropdown">
                                <a class=" dropdown-toggle para  " href="#" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Friends List
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Best friends</a></li>
                                    <li><a class="dropdown-item" href="#">Family</a></li>
                                    <li><a class="dropdown-item" href="#">Colleagues</a></li>
                                    <li><a class="dropdown-item" href="#">University friends</a></li>
                                    <li><a class="dropdown-item" href="#">School friends</a></li>
                                    <li><button class="btn-group create  ms-3"> Create new list</button></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="people_friend">
                        <div class="people mt-3">
                            <span class = "People_your_may_friends"> People your may friends</span>

                            <div class="addfr mt-3">
                                <img class="friends_photo_img width col-md-2 ms-2 " alt="Diep Tran " width="50"
                                    height="50" src="images/camera.png">
                                <div class="class col-md-4 ms-5 ">

                                    <a href="id.php" class="Name">Diep Tran</a>
                                    <a href="" class="School">ThuyLoiUniversity</a>

                                    <a href="" class="add">+Addfriends</a>
                                </div>
                            </div>

                            <div class="addfr mt-3 ">
                                <img class="friends_photo_img width col-md-2 ms-2 " alt="Oanh Koy " width="50"
                                    height="50" src="images/camera.png">
                                <div class="class col-md-4 ms-5 ">

                                    <a href="id.php" class="Name">Oanh Koy</a>
                                    <a href="" class="School">ThuyLoiUniversity</a>

                                    <a href="" class="add">+Addfriends</a>
                                </div>
                            </div>

                            <div class="addfr mt-3">
                                <img class="friends_photo_img width col-md-2 ms-2 " alt="Lan Le " width="50" height="50"
                                    src="images/camera.png">
                                <div class="class col-md-4 ms-5 ">
                                    <a href="id.php" class="Name">Lan Le</a>
                                    <a href="" class="School">ThuyLoiUniversity</a>

                                    <a href="" class="add">+Addfriends</a>
                                </div>
                            </div>

                            <div class="addfr mt-3">
                                <img class="friends_photo_img width col-md-2 ms-2 " alt="Thuy Le " width="50"
                                    height="50" src="images/camera.png">
                                <div class="class col-md-4 ms-5 ">
                                    <a href="id.php" class="Name">Thuy Le</a>
                                    <a href="" class="School">ThuyLoiUniversity</a>

                                    <a href="" class="add">+Addfriends</a>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <a href="" class="show_all">Show all</a>
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