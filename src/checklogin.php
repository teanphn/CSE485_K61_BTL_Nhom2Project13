<?php
include '../connect/constants.php';
if (!isset($_SESSION['id'])) {
    header('location:index.php');
}
