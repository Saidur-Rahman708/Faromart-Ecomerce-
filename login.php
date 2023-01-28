

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="shortcut icon" type="image" href="https://w7.pngwing.com/pngs/285/737/png-transparent-e-commerce-computer-icons-online-shopping-service-shopping-cart-miscellaneous-computer-network-angle.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }

        }
    </style>
</head>

<body>
    <div class="nav1">
        <div class="logo">
           <h1> <a href="index.php">FARO MART</a> </h1>
        </div>
        <div class="item">
            <ul>
              <li><a href="man.php">MAN</a></li>
              <li><a href="Woman.php">WOMAN</a></li>
              <li><a href="Children.php">CHILDREN</a></li>
            </ul>
          </div>
        <div class="button">
            <a class="but_1 active" style="background-color: #74b9ff;
            color: white;" href="login.php">Log In</a>
            <a class="but" href="signup.php">Sign Up</a>
        </div>

    </div>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="loginProcess.php" method="POST">
                        <p class="text-right h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Log In</p>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" class="form-control form-control-lg" name="email"
                                placeholder="Enter a valid email address" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" class="form-control form-control-lg" name="pass" placeholder="Enter password" />
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="true" />
                                <label class="form-check-label">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="submit" > 
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup.php"
                                    class="link-dark">SIGN UP</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div
            class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
            <!-- Copyright -->
            <div class="text-white mb-3 mb-md-0">
                Copyright © 2022. All rights reserved.
            </div>
            <!-- Copyright -->

            <!-- Right -->
            <div class="pl-5 text-center  s_icon">

                <a class="text-white" target="blank" href="https://www.facebook.com/fahimbhuiyan05"><i
                        class="fab fa-facebook"></i></a>
                <a class="text-white" target="blank" href="https://www.instagram.com/fahimbhuiyan05"><i
                        class="fab fa-instagram"></i></a>
                <a class="text-white" target="blank" href="https://www.youtube.com/channel/UCFNon0X8cCFdyIqAgo8nsqA*"><i
                        class="fab fa-youtube"></i></a>
                <a class="text-white" target="blank" href="https://twitter.com/fahimbhuiyan05"><i
                        class="fab fa-twitter"></i></a>
                <a class="text-white" target="blank" href="https://t.me/fahimbhuiyan05"><i
                        class="fab fa-telegram"></i></a>
            </div>
            <!-- Right -->
        </div>
    </section>
</body>

</html>