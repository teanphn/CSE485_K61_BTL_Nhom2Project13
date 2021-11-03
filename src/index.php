<?php
include("../connect/constants.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Quản lý và sắp xếp lịch làm việc</title>
</head>

<body>

    <section class="vh-100" style="background-image: url(../images/bg.jpg);">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">




                                    <form class="mx-1 mx-md-4" action="process-login.php" method="post">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="txtUser" name="txtUser" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Username</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="txtPass" name="txtPass1" class="form-control" />
                                                <label class="form-label" for="form3Example4c">Password</label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input class="btn btn-primary btn-lg" type="submit" name="btlogin" value="Đăng Nhập">

                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <a href="signup.php" class="btn btn-primary btn-lg" name="btsignup">Đăng ký</a>
                                        </div>
                                        <?php
                                        if (isset($_SESSION['noti'])) {
                                            echo $_SESSION['noti'];
                                            unset($_SESSION['noti']);
                                        }
                                        ?>
                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="../images/logo.jpg" class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="social" style='padding: 5% 0;'>
        <div class="container text-center">
            <ul style="list-style-type: none;">
                <li style="display: inline;padding: 1%;">
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"></a>
                </li>
                <li style="display: inline;padding: 1%;">
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"></a>
                </li>
                <li style="display: inline;padding: 1%;">
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"></a>
                </li>
            </ul>
        </div>
    </section>
        <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">NHOM9</a></p>
        </div>
    </section>
   





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>


</body>

</html>