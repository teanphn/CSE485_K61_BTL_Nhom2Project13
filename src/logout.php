<?php
//Include constants.php for SITEURL
include("../connect/constants.php");
//1. Destory the Session
session_destroy(); //Unsets $_SESSION['user']

//2. REdirect to Login Page
header("location: index.php");