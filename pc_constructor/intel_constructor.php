<?php
    include '../dbh.php';

    $sql = "SELECT * FROM mother WHERE chipset LIKE 'Intel%'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="../style.css">
    <title>Intel PC Constructor</title>
</head>
    <header>
        <nav id="nav-bar">
            <div class="links">
                <a href="../index.php"><h1>OnlyMasterGaming</h1></a>
            <ul id="ul-menu">
                <ul> 
                                    
                    <li><a href="../pc_store/index_pc.php">Buy a PC</a></li>
                    <li><a href="../pc_component/index_component.php">Buy accessories</a></li>
                    <li><a href="pc_constructor.php">Build a PC</a></li>
                    
                    <li><a href="../pc_component/add_component.php"><img src="https://cdn-icons-png.flaticon.com/512/992/992651.png" alt="Cart"></a></li> 
                    <li><a href="../login_system/profile.php"><img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="User"></a></li>
                    <li><a href="../cart/cart.php"><img src="https://uxwing.com/wp-content/themes/uxwing/download/19-e-commerce-currency-shopping/shopping-cart.png" alt="Add"></a></li>    
                              
                </ul>
            </ul>
            </div>
            <hr>
        </nav>
    </header>
<body>
    
    <main>
        <div class="contruct">
            
                <h2>Choose motherboard</h3>
                
                <?php
            foreach($result as $row):
              ?>
              <div class="mother-construct">
              <input type="checkbox" id="mthr" name="mother" value="mother">
              <?php
        echo "<h3>{$row['name']}</h3>                      
            <span>Pret: {$row['price']}EUR</span>";
            endforeach;
        ?>
            </div>
        </div>
    </main>


</body>
</html>