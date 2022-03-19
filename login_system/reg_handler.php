<?php
    include("../dbh.php");

    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
 
    $query = "INSERT INTO user(fullname, login, password, email, country, address) VALUES('$fullname', '$login', '$password', '$email', '$country', '$address')";

    mysqli_query($conn, $query);