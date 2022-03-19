<?php

require "../dbh.php";

$id = $_GET['id'];
$uId = $_GET['userId'];

$sql = "SELECT * FROM user WHERE user_id = '{$uId}'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

if($row['cart'] === NULL){
    $query = "UPDATE user SET cart = '{$id}' WHERE user_id='{$uId}'";
    mysqli_query($conn, $query);
} else{
    $qGet = "SELECT cart FROM user WHERE user_id='{$uId}'";
    $rGet = mysqli_query($conn, $qGet);
    $rowGet = mysqli_fetch_assoc($rGet);
    
    $strGet = $rowGet['cart'];
    
    $strArr = explode(" ", $strGet);
        if(!in_array($id, $strArr)){
            array_push($strArr, $id);
            
            $dbStr = implode(" ", $strArr);
            
            $query = "UPDATE user SET cart = '{$dbStr}' WHERE user_id='{$uId}'";
            mysqli_query($conn, $query);  
                   
        }
        // $id = "cpu" . $id;
        // echo $id;  
}



 header("Location: cart.php?id=" . $id);