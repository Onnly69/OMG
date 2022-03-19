<?php
    include '../dbh.php';
// motherboard
    $motherId = $_GET['motherId'];
    $userId = $_GET['userId'];

    $sql = "SELECT cart FROM user WHERE user_id = '$userId'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $produse = explode(" ", $row['cart']); 
    $index = array_search($motherId, $produse);
    
    unset($produse[$index]);
    $str = implode(" ", $produse);
    
    $sqlCart = "UPDATE user SET cart = '$str' WHERE user_id = '$userId'";
        mysqli_query($conn, $sqlCart);
        header("Location: cart.php");
    
// pc
        $pcId = $_GET['pcId'];
        $userId = $_GET['userId'];
    
        $sql = "SELECT cart FROM user WHERE user_id = '$userId'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $produse = explode(" ", $row['cart']);
        $index = array_search($pcId, $produse);
        
        unset($produse[$index]);
        $str = implode(" ", $produse);
        
        $sqlCart = "UPDATE user SET cart = '$str' WHERE user_id = '$userId'";
            mysqli_query($conn, $sqlCart);
            header("Location: cart.php");     

// cpu
        $cpuId = $_GET['cpuId'];
        $userId = $_GET['userId'];
    
        $sql = "SELECT cart FROM user WHERE user_id = '$userId'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $produse = explode(" ", $row['cart']);
        $index = array_search($cpuId, $produse);
        
        unset($produse[$index]);
        $str = implode(" ", $produse);
        
        $sqlCart = "UPDATE user SET cart = '$str' WHERE user_id = '$userId'";
            mysqli_query($conn, $sqlCart);
            header("Location: cart.php"); 


// cooler
         $clrId = $_GET['coolerId'];
        $userId = $_GET['userId'];
    
        $sql = "SELECT cart FROM user WHERE user_id = '$userId'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $produse = explode(" ", $row['cart']);
        $index = array_search($clrId, $produse);
        
        unset($produse[$index]);
        $str = implode(" ", $produse);
        
        $sqlCart = "UPDATE user SET cart = '$str' WHERE user_id = '$userId'";
            mysqli_query($conn, $sqlCart);
            header("Location: cart.php");
            

// ram
        $ramId = $_GET['ramId'];
        $userId = $_GET['userId'];
    
        $sql = "SELECT cart FROM user WHERE user_id = '$userId'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $produse = explode(" ", $row['cart']);
        $index = array_search($ramId, $produse);
        
        unset($produse[$index]);
        $str = implode(" ", $produse);
        
        $sqlCart = "UPDATE user SET cart = '$str' WHERE user_id = '$userId'";
            mysqli_query($conn, $sqlCart);
            header("Location: cart.php");


// storage            
        $stId = $_GET['storageId'];
        $userId = $_GET['userId'];
    
        $sql = "SELECT cart FROM user WHERE user_id = '$userId'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $produse = explode(" ", $row['cart']);
        $index = array_search($stId, $produse);
        
        unset($produse[$index]);
        $str = implode(" ", $produse);
        
        $sqlCart = "UPDATE user SET cart = '$str' WHERE user_id = '$userId'";
            mysqli_query($conn, $sqlCart);
            header("Location: cart.php");


// gpu
        $gpuId = $_GET['gpuId'];
        $userId = $_GET['userId'];
    
        $sql = "SELECT cart FROM user WHERE user_id = '$userId'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $produse = explode(" ", $row['cart']);
        $index = array_search($gpuId, $produse);
        
        unset($produse[$index]);
        $str = implode(" ", $produse);
        
        $sqlCart = "UPDATE user SET cart = '$str' WHERE user_id = '$userId'";
            mysqli_query($conn, $sqlCart);
            header("Location: cart.php");


// psu            
        $psuId = $_GET['psuId'];
        $userId = $_GET['userId'];
    
        $sql = "SELECT cart FROM user WHERE user_id = '$userId'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $produse = explode(" ", $row['cart']);
        $index = array_search($psuId, $produse);
        
        unset($produse[$index]);
        $str = implode(" ", $produse);
        
        $sqlCart = "UPDATE user SET cart = '$str' WHERE user_id = '$userId'";
            mysqli_query($conn, $sqlCart);
            header("Location: cart.php");


// case            
            $caseId = $_GET['caseId'];
        $userId = $_GET['userId'];
    
        $sql = "SELECT cart FROM user WHERE user_id = '$userId'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $produse = explode(" ", $row['cart']);
        $index = array_search($caseId, $produse);
        
        unset($produse[$index]);
        $str = implode(" ", $produse);
        
        $sqlCart = "UPDATE user SET cart = '$str' WHERE user_id = '$userId'";
            mysqli_query($conn, $sqlCart);
            header("Location: cart.php");


// monitor 
        $mntId = $_GET['monitorId'];
        $userId = $_GET['userId'];
    
        $sql = "SELECT cart FROM user WHERE user_id = '$userId'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $produse = explode(" ", $row['cart']);
        $index = array_search($mntId, $produse);
        
        unset($produse[$index]);
        $str = implode(" ", $produse);
        
        $sqlCart = "UPDATE user SET cart = '$str' WHERE user_id = '$userId'";
            mysqli_query($conn, $sqlCart);
            header("Location: cart.php");


// keyboard 
            $keyId = $_GET['keyboardId'];
        $userId = $_GET['userId'];
    
        $sql = "SELECT cart FROM user WHERE user_id = '$userId'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $produse = explode(" ", $row['cart']);
        $index = array_search($keyId, $produse);
        
        unset($produse[$index]);
        $str = implode(" ", $produse);
        
        $sqlCart = "UPDATE user SET cart = '$str' WHERE user_id = '$userId'";
            mysqli_query($conn, $sqlCart);
            header("Location: cart.php");


// mouse
            $msId = $_GET['mouseId'];
        $userId = $_GET['userId'];
    
        $sql = "SELECT cart FROM user WHERE user_id = '$userId'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $produse = explode(" ", $row['cart']);
        $index = array_search($msId, $produse);
        
        unset($produse[$index]);
        $str = implode(" ", $produse);
        
        $sqlCart = "UPDATE user SET cart = '$str' WHERE user_id = '$userId'";
            mysqli_query($conn, $sqlCart);
            header("Location: cart.php");


// mouse_pad
            $mspId = $_GET['padId'];
        $userId = $_GET['userId'];
    
        $sql = "SELECT cart FROM user WHERE user_id = '$userId'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $produse = explode(" ", $row['cart']);
        $index = array_search($mspId, $produse);
        
        unset($produse[$index]);
        $str = implode(" ", $produse);
        
        $sqlCart = "UPDATE user SET cart = '$str' WHERE user_id = '$userId'";
            mysqli_query($conn, $sqlCart);
            header("Location: cart.php");



// armchair
            $armId = $_GET['armchairId'];
        $userId = $_GET['userId'];
    
        $sql = "SELECT cart FROM user WHERE user_id = '$userId'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    
        $produse = explode(" ", $row['cart']);
        $index = array_search($armId, $produse);
        
        unset($produse[$index]);
        $str = implode(" ", $produse);
        
        $sqlCart = "UPDATE user SET cart = '$str' WHERE user_id = '$userId'";
            mysqli_query($conn, $sqlCart);
            header("Location: cart.php");
        
