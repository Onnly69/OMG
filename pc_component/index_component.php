<?php
    require "../dbh.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="../style.css">
    <title>OMG</title>
</head>
    <header>
        <nav id="nav-bar">
            <div class="links">
                <a href="../index.php"><h1>OnlyMasterGaming</h1></a>
            <ul id="ul-menu">
                <ul> 
                                    
                    <li><a href="../pc_store/index_pc.php">Buy a PC</a></li>
                    <li><a href="index_component.php">Buy accessories</a></li>
                    <li><a href="../pc_constructor/pc_constructor.php">Build a PC</a></li>
                    
                    <li><a href="add_component.php"><img src="https://cdn-icons-png.flaticon.com/512/992/992651.png" alt="Add"></a></li> 
                    <li><a href="../login_system/profile.php"><img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="User"></a></li>
                    <li><a href="../cart/cart.php"><img src="https://uxwing.com/wp-content/themes/uxwing/download/19-e-commerce-currency-shopping/shopping-cart.png" alt="Cart"></a></li>    
                              
                </ul> 
            </ul>
            </div>
            <hr>
        </nav>
    </header>
<body>
    
        <div class="pc-component">

        </div>
   

    <script src="index_component.js"></script>
</body>
</html>