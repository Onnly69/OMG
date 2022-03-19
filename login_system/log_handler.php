<?php
     session_start();
    include("../dbh.php");

    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

     //echo $login . " " . $password;

    $query = "SELECT * FROM user WHERE login = '$login'";

    if ($result = mysqli_query($conn, $query)) {
        $row = mysqli_fetch_assoc($result);

        //  print_r($row);

     //     echo $row['password'];

        if ($password === $row['password']) {
            echo "You're in!";
            $_SESSION['userId'] = $row['user_id'];
        } else {
            echo "Incorrect password or login ";
        }
    } 