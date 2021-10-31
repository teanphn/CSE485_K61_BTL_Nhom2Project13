<?php
include("../connect/constants.php");
if(isset($_POST['btsignup'])){
    $namesu = $_POST['txthoten'];
    $agesu = $_POST['txttuoi'];    
    $andr = $_POST['txtdiachi'];
    $mailsu = $_POST['txtmail'];    
    $usernmsu = $_POST['txtusersu'];   
    $pass2 = $_POST['txtPass2'];
    $pass3 = $_POST['txtPass3'];
    if ($pass2 != $pass3){
        $_SESSION['noti'] = '<p class="text-danger">Mật Khẩu Chưa Trùng Khớp</p>'; 
        header("location:signup.php");
    }
    if ($namesu == ''or $agesu == '' or $andr == '' or $mailsu == '' or $usernmsu == '' or $pass2 == ''  ){ 
        $_SESSION['noti'] = '<p class="text-danger">Vui lòng điền đầy đủ thông tin</p>'; 
        header("location:signup.php");

    }
    //$sql_1 = "INSERT INTO user (ho ten,dia chi) VALUES ('$namesu','$andr')";

    $sql_1 = "INSERT INTO `user` ( `ho ten`, `dia chi`, `tuoi`, `email`, `loai`, `taikhoan`, `matkhau`) VALUES ( '$namesu','$andr','$agesu','$mailsu','2','$usernmsu','$pass2')";
    $sql_2 = "SELECT * FROM user Where $id=iduser";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        $firstname = $row['ho ten'];
        $diachi = $row['dia chi'];
        $tuoi = $row['tuoi'];
        $email = $row['email'];
    }


   if (mysqli_query($conn, $sql_1) === TRUE){
        header("location:index.php");
    }
    else {
        echo "Error: " . $sql_1 . "<br>" . mysqli_error($conn);
   }
    //$sql_1 = "INSERT INTO user (ho ten,dia chi,tuoi,email,loai,taikhoan,matkhau) 
    //VALUES ('$namesu','$andr','$agesu','$mailsu','$agesu','$usernmsu','$pass2')";

}


?>