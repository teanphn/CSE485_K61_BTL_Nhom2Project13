<?php
include("../connect/constants.php");
$id = $_SESSION['id'];
$tennd = $_POST['tennd'];
$diachind = $_POST['diachind'];
$mailnd = $_POST['mailnd'];
$tuoind = $_POST['tuoind'];
$cv = $_POST['cv'];
$sql_2 = "UPDATE `user`
SET `ho ten` = '$tennd', `dia chi` = '$diachind', `tuoi` = '$tuoind' , `email` = '$mailnd'
WHERE `iduser`= '$id'";
if (mysqli_query($conn, $sql_2)) {
    header("location:nguoidung.php");
    $_SESSION['noti'] = '<p class="text-white">Sửa thành công</p>';
} else {
    echo "Error: " . $sql_2 . "<br>" . mysqli_error($conn);
}
$sql_3 = "UPDATE `kehoach`
SET `noi dung` = '$cv'";
if (mysqli_query($conn, $sql_3)) {
    header("location:nguoidung.php");
    $_SESSION['noti'] = '<p class="text-white">Sửa thành công</p>';
} else {
    echo "Error: " . $sql_3 . "<br>" . mysqli_error($conn);
}
