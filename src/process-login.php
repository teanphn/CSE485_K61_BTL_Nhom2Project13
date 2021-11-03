<?php
include("../connect/constants.php");
if (isset($_POST['btlogin'])) {
    $user  = $_POST['txtUser'];
    $pass1 = $_POST['txtPass1'];
    $sql = "SELECT*FROM user WHERE taikhoan = '$user' and matkhau = '$pass1'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['loai'] = $row['loai'];
        $_SESSION['id'] = $row['iduser'];
        if ($_SESSION['loai'] == 1) {
            header("location:quanly.php");
        } else {
            header("location:nguoidung.php");
        }
    } else {
        $_SESSION['noti'] = '<p class="text-danger">Tài khoản mật khẩu chưa chính xác</p>';
        header("location:index.php");
    }
}
