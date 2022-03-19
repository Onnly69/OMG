<?php
    include '../dbh.php';
    session_start();

    $id = $_GET['id'];
    // echo $id;

    $sql = "SELECT * FROM pc WHERE pc_id = '{$id}' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    // print_r($row);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="../style.css">
    <title><?php echo $row['name'] ?></title>

</head>
<body>
    <header>
    <nav id="nav-bar">
            <div class="links">
                <a href="../index.php"><h1>OnlyMasterGaming</h1></a>
            <ul id="ul-menu">
                <ul> 
                                    
                    <li><a href="index_pc.php">Buy a PC</a></li>
                    <li><a href="../pc_component/index_component.php">Buy accessories</a></li>
                    <li><a href="../pc_constructor/pc_constructor.php">Build a PC</a></li>
                    
                    <li><a href="../pc_component/add_component.php"><img src="https://cdn-icons-png.flaticon.com/512/992/992651.png" alt="Cart"></a></li> 
                    <li><a href="../login_system/profile.php"><img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="User"></a></li>
                    <li><a href="../cart/cart.php"><img src="https://uxwing.com/wp-content/themes/uxwing/download/19-e-commerce-currency-shopping/shopping-cart.png" alt="Add"></a></li>    
                              
                </ul>
            </ul>
            </div>
            <hr>
        </nav>
    </header>
    <main>
        <div class="show-pc">
            <img src="<?php echo $row['img'] ?>" alt="img failed to load">
            <h3><?php echo $row['name']?></h3>
            <p><span>Description:</span><?php echo $row['description'] ?></p>
            <span><?php echo "Cpu: " . $row['cpu'] ?></span>
            <br>
            <span><?php echo "Motherboard: " . $row['mother'] ?></span> 
            <br>
            <span><?php echo "Cooler: " . $row['cooler'] ?></span>
            <br>
            <span><?php echo "RAM: " . $row['ram'] ?></span>
            <br>
            <span><?php echo "HDD/SSD: " . $row['storage'] . " GB "?></span>
            <br>
            <span><?php echo "GPU: " . $row['gpu'] ?></span>
            <br>
            <span><?php echo "Power Supply: " . $row['psu'] ?></span>
            <br>
            <span><?php echo "Case: " . $row['pc_case']  ?></span>      
            <br>
            <span><?php echo "Price: " . $row['price']  ?></span>    
            <br>
            <span><?php echo "Stock: " . $row['quantity'] . " pieces"  ?></span>    
            <br>        
            <?php
                if (isset($_SESSION['userId'])) { 
                    ?>
                        <a href="../cart/add_to_cart.php?id=<?php echo $row['pc_id'] ?>&userId=<?php echo $_SESSION['userId'] ?>">Add to cart</a>
                    <?php
                }
            ?>
                
             
        </div>
    </main>
</body>
</html>