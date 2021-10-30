<?php
include("../connect/constants.php");
if(isset($_POST['btlogin'])){
    $user  = $_POST['txtUser'];
    $pass1 = $_POST['txtPass1'];
    $sql = "SELECT*FROM user WHERE taikhoan = '$user' and matkhau = '$pass1' ";

    $res = mysqli_query($conn, $sql);
    if ($res) {
        if (mysqli_num_rows($res)>0)
        {
          $row = mysqli_fetch_assoc($res);   
          $_SESSION['loai'] = $row['loai'];
          $_SESSION['id']=$row['iduser'];
          if ($_SESSION['loai'] == 1){ 
              header("location:quanly.php");
            }
            else
            {
                header("location:nguoidung.php");  
            }
        }
        else 
        {
            echo 'mời đăng nhập lại';
            header("location:index.php");

        }
    
    }
}




?>