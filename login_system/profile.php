<?php
    session_start();
    include("../dbh.php");

    if (isset($_SESSION['userId'])) {
        $id = $_SESSION['userId'];

        $query = "SELECT * FROM user WHERE user_id = '$id'";

        $result = mysqli_query($conn, $query);

        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="../style.css">
    <title>OMG | <?php echo $row['fullname'] ?> </title>
</head>
    <header>
        <nav id="nav-bar">
            <div class="links">
                <a href="../index.php"><h1>OnlyMasterGaming</h1></a>
            <ul id="ul-menu">
                <ul> 
                                    
                    <li><a href="../pc_store/index_pc.php">Buy a PC</a></li>
                    <li><a href="../pc_component/index_component.php">Buy accessories</a></li>
                    <li><a href="../pc_constructor/pc_constructor.php">Build a PC</a></li>
                    
                    <li><a href="../pc_component/add_component.php"><img src="https://cdn-icons-png.flaticon.com/512/992/992651.png" alt="Add"></a></li> 
                    <li><a href="profile.php"><img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="User"></a></li>
                    <li><a href="../cart/cart.php"><img src="https://uxwing.com/wp-content/themes/uxwing/download/19-e-commerce-currency-shopping/shopping-cart.png" alt="Cart"></a></li>    
                    <li><a href="logout.php"><img src="https://cdn-icons-png.flaticon.com/512/660/660350.png" alt="Exit"></a></li>       
                </ul>
            </ul>
            </div>
            <hr>
        </nav>
    </header>
<body>

    <main>
        <div class="user-data">
            <h1><?php echo $row['fullname'] ?></h1>
        </div>
    </main>

</a>
</body>
</html>