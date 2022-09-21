<?php

require("connect.php");
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["username"];
    $pass = $_POST["password"];


    $sql = "SELECT * FROM `user` WHERE `username`='" . $name . "' AND `password`= '" . $pass . "'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);

    if ($row["usertype"] == "student") {
        header("location:studentdashboard.php");
    } else if ($row["usertype"] == "admin") {
        header("location:admindashboard.php");
    } else {
        echo "invalid credentials";
    }
}
