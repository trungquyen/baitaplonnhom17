<body >
    <header class="fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 px-0">
                    <nav class="navbar navbar-light py-0">
                        <div class="navbar-header w-100 px-0">
                            <a class="navbar-brand" href="New.php">
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

                            <a href="" class="header__app d-block ms-auto">
                                <i class="bi bi-grid-3x3-gap-fill"></i>
                            </a>
                            
                            <div class="btn-group">
                                <a type="button" class="btn header__camera" style="color: #adb5bd" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="images/camera.png" alt="" class="header__camera--img">
                                    <i class="header__camera--icon bi bi-caret-down-fill"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <div class="camera--item">
                                            <a href="update_info.php" class="camera__avatar">
                                                <img src="images/camera.png" alt="" class="camera--img">
                                                <div class="camera--text">
                                                    <?php
                                                        if (isset($_SESSION['isLoginOK']))
                                                        {
                                                            echo '<span class="d-block">'.$row2['first_name'].' '.$row2['last_name'].'</span>';
                                                            echo '<span class="d-block" style="color: #0d6efd">id: '.$row['id'].'</span>';
                                                            echo '<span class="d-block" style="color: #0d6efd">VK ID settings</span>';
                                                        }
                                                    ?>
                                                </div>
                                            </a>
                                            <div class="camera__button">
                                                <a href="" class="camera__button-link">
                                                    <span class="camera__button-label">VK Pay</span>
                                                    <span class="camera__button-label" style="color: #0d6efd">Open</span>
                                                </a>
                                                <a href="" class="camera__button-link">
                                                    <span class="camera__button-label">VK Combo</span>
                                                    <span class="camera__button-label" style="color: #0d6efd">More</span>
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

    <main class="mt-5">
        <div class="container">
            <div class="row">

                <div class="col-md-2 ps-1 mt-3">
                    <ul class="list__row">
                        <li class="list__item">
                            <a href="id.php" class="d-block list-item__row">
                                <i class="list-item__icon bi bi-person-circle"></i>
                                <span>My profile</span>
                            </a>
                        </li>
                        <li class="list__item">
                            <a href="New.php" class="d-block list-item__row">
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
                            <a href="friend.php" class="d-block list-item__row">
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
