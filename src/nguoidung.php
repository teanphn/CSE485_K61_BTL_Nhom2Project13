<?php
include('../connect/constants.php') ;
include('checklogin.php');
?>
<?php
    $id=$_SESSION['id'];
    $sql = "SELECT * FROM user Where $id=iduser";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        $firstname = $row['ho ten'];
        $diachi = $row['dia chi'];
        $tuoi = $row['tuoi'];
        $email = $row['email'];
    }
    $sql = "SELECT * FROM kehoach Where $id=iduser";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)>0) {
        $row = mysqli_fetch_assoc($result);
        $tencv = $row['ten'];
        $cv = $row['noi dung'];
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Người dùng</title>
</head>
</style>
<nav>
    <div class="container" style="background-color: #eee;">
        <div class="row">
            <div class="col-md-3">
                <a class="logo" href="#">
                    <img src="../images/logond.jpg" alt="..." style="width:150px;height:150px;">
                </a>
            </div>
            <div class="col-md-9">
                <h1 style="float:right;margin-right: 20px;">Thông tin và lịch làm việc của nhân viên</h1></a>
            </div>
        </div>
    </div>
    </div>
</nav>
<div class="container" style="background-image:url('../images/quanly.jpg');margin-top:2q%; ">
    <div class="row">
        <div class="col-md-3">
         <img src="../images/no-images.jpg" alt="" class="img-nhanvien" id="img-src">
        </div>
        <div class="col-md-6">
        <form action="process-sua.php" method="POST">
                    <div class="form-group">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Tên </label>
                            <input name="firstname" value="<?php echo $firstname?>" type="text" class="form-control" id="exampleInputName">
                            <small id="emailHelp" class="form-text text-muted">Mời nhập tên</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInput">Địa chỉ</label>
                            <input name="mobie" value="<?php echo $diachi?>" type="text" class="form-control" id="exampleInput">
                        </div>
                        <div class="form-group">
                            <label for="exampleInput">Địa chỉ</label>
                            <input name="mobie" value="<?php echo $email?>" type="text" class="form-control" id="exampleInput">
                        </div>
                        <div class="form-group">
                            <label for="exampleInput">email</label>
                            <input name="email" value="<?php echo $tuoi?>" type="text" class="form-control" id="exampleInput">
                        </div>
                        <div class="form-group">
                            <label for="exampleInput">công việc</label>
                            <input name="CV" value="<?php echo $cv?>" type="text" class="form-control" id="exampleInput">
                        </div>
                        <button name="btsua" type="submit" class="btn btn-primary btn-lg" style="margin-top:10px">Sửa</button>
                </form>
            </div>
        </div>
    </div>
</div>
<a href="index.php" class="btn btn-primary btn-lg " style=" position: relative;left: 1350px;" >
          <span class="glyphicon glyphicon-log-out"></span> Log out
</a>

        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>