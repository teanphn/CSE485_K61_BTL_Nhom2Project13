<?php
include("../connect/constants.php");
$iduser = $_GET['iduser'];
$sql = "DELETE FROM user WHERE iduser = $iduser";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    header("location:quanly.php");
} else {
    header("location:quanly.php");
}