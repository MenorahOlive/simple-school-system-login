<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>
<body>
    
</body>
</html>



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
        header("location:index.php");  
        $_SESSION['error']= "<p class=\"bi bi-exclamation-circle text-warning \" > Invalid Credetials<p>";
        }

      
}
