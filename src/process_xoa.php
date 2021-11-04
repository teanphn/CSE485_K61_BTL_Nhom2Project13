<?php
include("../connect/constants.php");
$iduser = $_GET['id'];
$sql = "DELETE FROM kehoach WHERE idus = $iduser";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    $sql_1 = "DELETE FROM user WHERE iduser = $iduser";
    $res_1 = mysqli_query($conn, $sql_1);
    if ($res_1 == true) {
        header("location:quanly.php");
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //header("location:quanly.php");
}
