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


                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form class="mx-1 mx-md-4" action="process_signup.php" method="post">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="txtUser" name="txthoten" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Họ & tên</label>
                                            </div>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="txtUser" name="txttuoi" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Tuổi</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="txtUser" name="txtdiachi" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Địa chỉ</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="txtUser" name="txtmail" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Email</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="txtUser" name="txtusersu" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Tên đăng nhập</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="txtPass" name="txtPass2" class="form-control" />
                                                <label class="form-label" for="form3Example4c">Mật Khẩu</label>
                                            </div>
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="txtPass" name="txtPass3" class="form-control" />
                                                <label class="form-label" for="form3Example4c">Nhập Lại Mật Khẩu</label>
                                            </div>
                                        </div>
                                        <?php
                                        if (isset($_SESSION['noti'])) {
                                            echo $_SESSION['noti'];
                                            unset($_SESSION['noti']);
                                        }
                                        ?>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input class="btn btn-primary btn-lg" type="submit" name="btsignup" value="Đăng kí">
                                        </div>

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





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>


</body>

</html>