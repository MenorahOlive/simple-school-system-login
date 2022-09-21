<?php

require("connect.php");
session_start();
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["username"];
    $pass = $_POST["password"];


    $sql = "SELECT * FROM `user` WHERE `username`='" . $name . "' AND `password`= '" . $pass . "'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);

    if ($row["usertype"] == "student") {
        $_SESSION['username']=$name;

        $_SESSION['usertype']="student";
        header("location:studentdashboard.php");
    } else if ($row["usertype"] == "admin") {
        $_SESSION['username']=$name;
        $_SESSION['usertype']="admin";
        header("location:admindashboard.php");
    } else {
        
        $message = "invalid credentials";
        $_SESSION['loginMessage'] = $message;
        header("location:login.php");
    }
}
