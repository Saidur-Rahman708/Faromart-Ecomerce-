
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="shortcut icon" type="image" href="https://w7.pngwing.com/pngs/285/737/png-transparent-e-commerce-computer-icons-online-shopping-service-shopping-cart-miscellaneous-computer-network-angle.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="nav1">

        <div class="logo">
            <h1> <a href="index.php">FARO MART</a> </h1>
        </div>
        <div class="item">
            <ul>
                <li><a href="man.php">MAN</a></li>
                <li><a href="Women.php">WOMAN</a></li>
                <li><a href="Children.php">CHILDREN</a></li>
            </ul>
        </div>
        <div class="button">
            <a class="but_1" href="login.php">Log In</a>
            <a class="but active" style="background-color: #74b9ff;
          color: white;" href="signup.php">Sign In</a>
        </div>
    </div>
    <div class="col-lg-12 col-xl-11">
        <div class="text-black" style="border-radius: 25px;">
            <div class="p-md-5">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign Up</p>

                        <form class="mx-1 mx-md-4" action="operation.php" method="POST">

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                                    <!-- <span <?php echo "$user_name_err";?>></span> -->
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <input type="email" placeholder="Your Email" name="email" class="form-control">
                                    <!-- <span <?php echo "$user_email_err";?>></span> -->
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <!-- <span <?php echo "$user_password_err";?>></span> -->
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <input type="text" class="form-control" name="address" placeholder="Enter your Address">
                                    <!-- <span <?php echo "$user_address_err";?>></span> -->
                                </div>
                            </div>

                            <div class="form-check d-flex justify-content-center mb-5">
                                <input class="form-check-input me-2" type="checkbox" name="checked" value="true" id="form2Example3c" />
                                <label class="form-check-label" for="form2Example3">
                                    I agree all statements in <a href="#!">Terms of service</a>
                                </label>
                            </div>

                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="save" > 

                        </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                            class="img-fluid" alt="Sample image">

                    </div>
                </div>
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
            <a class="text-white" target="blank" href="https://t.me/fahimbhuiyan05"><i class="fab fa-telegram"></i></a>
        </div>
        <!-- Right -->
    </div>
</body>

</html>