<?php
include("../connect/constants.php");
if (isset($_POST['btsignup'])) {
    $namesu = $_POST['txthoten'];
    $agesu = $_POST['txttuoi'];
    $andr = $_POST['txtdiachi'];
    $mailsu = $_POST['txtmail'];
    $usernmsu = $_POST['txtusersu'];
    $pass2 = $_POST['txtPass2'];
    $pass3 = $_POST['txtPass3'];
<<<<<<< HEAD
    $check=true;
    if ($pass2 != $pass3){
        $_SESSION['noti'] = '<p class="text-danger">Mật Khẩu Chưa Trùng Khớp</p>'; 
        $check=false;
    }
    if ($namesu == ''or $agesu == '' or $andr == '' or $mailsu == '' or $usernmsu == '' or $pass2 == ''  ){ 
        $_SESSION['noti'] = '<p class="text-danger">Vui lòng điền đầy đủ thông tin</p>'; 
        $check=false;
    }

 if ($check==true){
    $helper = $usernmsu ;
    $sql = "INSERT INTO `user` ( `ho ten`, `dia chi`, `tuoi`, `email`, `loai`, `taikhoan`, `matkhau`) 
    VALUES ( '$namesu','$andr','$agesu','$mailsu','2','$usernmsu','$pass2')";

   if (mysqli_query($conn, $sql) === true){
                   //fix thiếu idus
                    $sql_1 = "SELECT * FROM `user` Where `taikhoan` = '$helper'";
                    $result = mysqli_query($conn, $sql_1);
                    if (mysqli_num_rows($result)>0){
                    $row = mysqli_fetch_assoc($result);
                    $idus = $row['iduser'];
                    $sql_2 ="INSERT INTO `kehoach` ( `idus`) VALUES ( '$idus') " ;
                    $result_2 = mysqli_query($conn, $sql_2);
                    header("location:index.php");
                    }
                   //--

    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
         }
    else{
        header("location:signup.php");
    }


}


?>
=======
    if ($pass2 != $pass3) {
        $_SESSION['noti'] = '<p class="text-danger">Mật Khẩu Chưa Trùng Khớp</p>';
        header("location:signup.php");
    }
    if ($namesu == '' or $agesu == '' or $andr == '' or $mailsu == '' or $usernmsu == '' or $pass2 == '') {
        $_SESSION['noti'] = '<p class="text-danger">Vui lòng điền đầy đủ thông tin</p>';
        header("location:signup.php");
    }


    $helper = $usernmsu;
    $sql = "INSERT INTO `user` ( `ho ten`, `dia chi`, `tuoi`, `email`, `loai`, `taikhoan`, `matkhau`) 
    VALUES ( '$namesu','$andr','$agesu','$mailsu','2','$usernmsu','$pass2')";

    if (mysqli_query($conn, $sql)) {
        //fix thiếu idus
        $sql_1 = "SELECT * FROM `user` Where `taikhoan` = '$helper'";
        $result = mysqli_query($conn, $sql_1);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $idus = $row['iduser'];
            $sql_2 = "INSERT INTO `kehoach` ( `idus`) VALUES ( '$idus') ";
            $result_2 = mysqli_query($conn, $sql_2);
        }
        //--
        header("location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
>>>>>>> 1690f13a45fe4da26da7be817319187aee45d76b
