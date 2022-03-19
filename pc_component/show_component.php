<?php
    include '../dbh.php';
    session_start();

    $id = $_GET['id'];

    $mthrSql = "SELECT * FROM mother WHERE mother_id = '{$id}' LIMIT 1";
    $mthrResult = mysqli_query($conn, $mthrSql);
    $mthrRow = mysqli_fetch_assoc($mthrResult);

    $cpuSql = "SELECT * FROM cpu WHERE cpu_id = '{$id}' LIMIT 1";
    $cpuResult = mysqli_query($conn, $cpuSql);
    $cpuRow = mysqli_fetch_assoc($cpuResult);

    $clrSql = "SELECT * FROM cooler WHERE cooler_id = '{$id}' LIMIT 1";
    $clrResult = mysqli_query($conn, $clrSql);
    $clrRow = mysqli_fetch_assoc($clrResult);

    $ramSql = "SELECT * FROM ram WHERE ram_id = '{$id}' LIMIT 1";
    $ramResult = mysqli_query($conn, $ramSql);
    $ramRow = mysqli_fetch_assoc($ramResult);

    $stSql = "SELECT * FROM storage WHERE storage_id = '{$id}' LIMIT 1";
    $stResult = mysqli_query($conn, $stSql);
    $stRow = mysqli_fetch_assoc($stResult);

    $gpuSql = "SELECT * FROM videocard WHERE gpu_id = '{$id}' LIMIT 1";
    $gpuResult = mysqli_query($conn, $gpuSql);
    $gpuRow = mysqli_fetch_assoc($gpuResult);

    $psuSql = "SELECT * FROM psu WHERE psu_id = '{$id}' LIMIT 1";
    $psuResult = mysqli_query($conn, $psuSql);
    $psuRow = mysqli_fetch_assoc($psuResult);

    $caseSql = "SELECT * FROM cases WHERE case_id = '{$id}' LIMIT 1";
    $caseResult = mysqli_query($conn, $caseSql);
    $caseRow = mysqli_fetch_assoc($caseResult);

    $mntSql = "SELECT * FROM monitor WHERE monitor_id = '{$id}' LIMIT 1";
    $mntResult = mysqli_query($conn, $mntSql);
    $mntRow = mysqli_fetch_assoc($mntResult);

    $keySql = "SELECT * FROM keyboard WHERE keyboard_id = '{$id}' LIMIT 1";
    $keyResult = mysqli_query($conn, $keySql);
    $keyRow = mysqli_fetch_assoc($keyResult);

    $msSql = "SELECT * FROM mouse WHERE mouse_id = '{$id}' LIMIT 1";
    $msResult = mysqli_query($conn, $msSql);
    $msRow = mysqli_fetch_assoc($msResult);

    $mspSql = "SELECT * FROM mouse_pad WHERE pad_id = '{$id}' LIMIT 1";
    $mspResult = mysqli_query($conn, $mspSql);
    $mspRow = mysqli_fetch_assoc($mspResult);

    $armSql = "SELECT * FROM armchair WHERE armchair_id = '{$id}' LIMIT 1";
    $armResult = mysqli_query($conn, $armSql);
    $armRow = mysqli_fetch_assoc($armResult);

    
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
    <style>
        .pc-component{
            display: block;
        }
    </style>
</head>
<body>
    <header>
    <nav id="nav-bar">
            <div class="links">
                <a href="../index.php"><h1>OnlyMasterGaming</h1></a>
            <ul id="ul-menu">
                <ul> 
                                    
                    <li><a href="../pc_store/index_pc.php">Buy a PC</a></li>
                    <li><a href="index_component.php">Buy accessories</a></li>
                    <li><a href="../pc_constructor/pc_constructor.php">Build a PC</a></li>
                    
                    <li><a href="add_component.php"><img src="https://cdn-icons-png.flaticon.com/512/992/992651.png" alt="Cart"></a></li> 
                    <li><a href="../login_system/profile.php"><img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="User"></a></li>
                    <li><a href="../cart/cart.php"><img src="https://uxwing.com/wp-content/themes/uxwing/download/19-e-commerce-currency-shopping/shopping-cart.png" alt="Add"></a></li>    
                              
                </ul>
            </ul>
            </div>
            <hr>
        </nav>
    </header>
    <main>
<?php
 error_reporting(0);
    if($mthrRow['category'] === 'MOTHERBOARD' ){
        
    ?>
        <div class="show-comp">
            <img src="<?php echo $mthrRow['img'] ?>" alt="img failed to load">
            <h3><?php echo $mthrRow['name'] ?></h3>
            <p><span>Description:</span><?php echo $mthrRow['description'] ?></p>
            <span><?php echo "Form-factor: " . $mthrRow['form_factor'] ?></span>
            <span><?php echo "Socket: " . $mthrRow['socket'] ?></span>
            <span><?php echo "Type of RAM: " . $mthrRow['type_ram'] ?></span>
            <span><?php echo "Nr of slots for RAM: " . $mthrRow['nr_slot_ram'] ?></span>
            <span><?php echo "Max RAM capacity: " . $mthrRow['max_ram'] . " GB "?></span>
            <span><?php echo "Size: " . $mthrRow['size'] . " mm "?></span>
            <span><?php echo "Price: " . $mthrRow['price'] . " EUR" ?></span>
            <span><?php echo "Stock: " . $mthrRow['quantity'] . " Pieces" ?></span>              
            <?php
                if (isset($_SESSION['userId'])) {
                    ?>
                        <a href="../cart/add_to_cart.php?id=<?php echo $mthrRow['mother_id'] ?>&userId=<?php echo $_SESSION['userId'] ?>">Add to cart</a>
                    <?php
                }
            ?>                          
        </div>
    <?php
        }
    ?>    

<?php
    if($cpuRow['category'] === 'CPU' ){
    ?>
        <div class="show-comp">
            <img src="<?php echo $cpuRow['img'] ?>" alt="img failed to load">
            <h3><?php echo $cpuRow['name'] ?></h3>
            <p><span>Description:</span><?php echo $cpuRow['description'] ?></p>
            <span><?php echo "Core and Threads: " . $cpuRow['multi'] ?></span>
            <span><?php echo "Frequence: " . $cpuRow['freq']. " MHz"  ?></span>
            <span><?php echo "Status: " . $cpuRow['status'] ?></span>
            <span><?php echo "Video chip: " . $cpuRow['graphic_cpu'] ?></span>
            <span><?php echo "Socket: " . $cpuRow['socket']?></span>
            <span><?php echo "Price: " . $cpuRow['price'] . " EUR" ?></span>
            <span><?php echo "Stock: " . $cpuRow['quantity'] . " Pieces" ?></span>              
            <?php
                if (isset($_SESSION['userId'])) {
                    ?>
                        <a href="../cart/add_to_cart.php?id=<?php echo $cpuRow['cpu_id'] ?>&userId=<?php echo $_SESSION['userId'] ?>">Add to cart</a>
                    <?php
                }
            ?>                          
        </div>
        <?php
        }
    ?>

<?php
    if($clrRow['category'] === 'COOLER' ){
    ?>
        <div class="show-comp">
            <img src="<?php echo $clrRow['img'] ?>" alt="img failed to load">
            <h3><?php echo $clrRow['name'] ?></h3>
            <p><span>Description:</span><?php echo $clrRow['description'] ?></p>
            <span><?php echo "Type: " . $clrRow['type'] ?></span>
            <span><?php echo "Tdp: " . $clrRow['tdp'] . " W"  ?></span>
            <span><?php echo "Socket Support: " . $clrRow['socket'] ?></span>
            <span><?php echo "Fan RPM: " . $clrRow['rpm'] ?></span>
            <span><?php echo "Size: " . $clrRow['size'] . " mm "?></span>
            <span><?php echo "Color: " . $clrRow['color']?></span>
            <span><?php echo "Weight: " . $clrRow['weight'] . " g "?></span>
            <span><?php echo "Price: " . $clrRow['price'] . " EUR" ?></span>
            <span><?php echo "Stock: " . $clrRow['quantity'] . " Pieces" ?></span>              
            <?php
                if (isset($_SESSION['userId'])) {
                    ?>
                        <a href="../cart/add_to_cart.php?id=<?php echo $clrRow['cooler_id'] ?>&userId=<?php echo $_SESSION['userId'] ?>">Add to cart</a>
                    <?php
                }
            ?>                          
        </div>
        <?php
        }
    ?>

<?php
    if($ramRow['category'] === 'RAM' ){
    ?>
        <div class="show-comp">
            <img src="<?php echo $ramRow['img'] ?>" alt="img failed to load">
            <h3><?php echo $ramRow['name'] ?></h3>
            <p><span>Description:</span><?php echo $ramRow['description'] ?></p>
            <span><?php echo "Type of RAM: " . $ramRow['ram_type'] ?></span>
            <span><?php echo "Capacity: " . $ramRow['capacity']. " GB " ?></span>
            <span><?php echo "Frequence: " . $ramRow['mem_speed'] ?></span>
            <span><?php echo "Form-Factor: " . $ramRow['form_factor'] ?></span>
            <span><?php echo "Price: " . $ramRow['price'] . " EUR" ?></span>
            <span><?php echo "Stock: " . $ramRow['quantity'] . " Pieces" ?></span>              
            <?php
                if (isset($_SESSION['userId'])) {
                    ?>
                        <a href="../cart/add_to_cart.php?id=<?php echo $ramRow['ram_id'] ?>&userId=<?php echo $_SESSION['userId'] ?>">Add to cart</a>
                    <?php
                }
            ?>                          
        </div>
        <?php
        }
    ?>
    
    <?php
    if($stRow['category'] === 'STORAGE' ){
    ?>
        <div class="show-comp">
            <img src="<?php echo $stRow['img'] ?>" alt="img failed to load">
            <h3><?php echo $stRow['name'] ?></h3>
            <p><span>Description:</span><?php echo $stRow['description'] ?></p>
            <span><?php echo "Capacity: " . $stRow['capacity']. " GB "  ?></span>
            <span><?php echo "Type: " . $stRow['type']?></span>
            <span><?php echo "Form-Factor: " . $stRow['form_factor'] ?></span>
            <span><?php echo "Read speed: " . $stRow['read_speed'] ?></span>
            <span><?php echo "Write speed: " . $stRow['write_speed']?></span>
            <span><?php echo "Price: " . $stRow['price'] . " EUR" ?></span>     
            <span><?php echo "Stock: " . $stRow['quantity'] . " Pieces" ?></span>          
            <?php
                if (isset($_SESSION['userId'])) {
                    ?>
                        <a href="../cart/add_to_cart.php?id=<?php echo $stRow['storage_id'] ?>&userId=<?php echo $_SESSION['userId'] ?>">Add to cart</a>
                    <?php
                }
            ?>                          
        </div>
        <?php
        }
    ?>

<?php
    if($gpuRow['category'] === 'GPU' ){
    ?>
        <div class="show-comp">
            <img src="<?php echo $gpuRow['img'] ?>" alt="img failed to load">
            <h3><?php echo $gpuRow['name'] ?></h3>
            <p><span>Description:</span><?php echo $gpuRow['description'] ?></p>
            <span><?php echo "Capacity: " . $gpuRow['memory']. " GB "  ?></span>
            <span><?php echo "Type of memory: " . $gpuRow['mem_type']?></span>
            <span><?php echo "Memory clock: " . $gpuRow['mem_clock'] ?></span>
            <span><?php echo "Size: " . $gpuRow['size']. " mm "  ?></span>
            <span><?php echo "Price: " . $gpuRow['price'] . " EUR" ?></span>
            <span><?php echo "Stock: " . $gpuRow['quantity'] . " Pieces" ?></span>              
            <?php
                if (isset($_SESSION['userId'])) {
                    ?>
                        <a href="../cart/add_to_cart.php?id=<?php echo $gpuRow['gpu_id'] ?>&userId=<?php echo $_SESSION['userId'] ?>">Add to cart</a>
                    <?php
                }
            ?>                          
        </div>
        <?php
        }
    ?>

<?php
    if($psuRow['category'] === 'PSU' ){
    ?>
        <div class="show-comp">
            <img src="<?php echo $psuRow['img'] ?>" alt="img failed to load">
            <h3><?php echo $psuRow['name'] ?></h3>
            <p><span>Description:</span><?php echo $psuRow['description'] ?></p>
            <span><?php echo "Power: " . $psuRow['power']. " W "  ?></span>
            <span><?php echo "Fan size: " . $psuRow['psu_fan']. " mm " ?></span>
            <span><?php echo "Fan RPM: " . $psuRow['rpm'] ?></span>
            <span><?php echo "Type: " . $psuRow['type'] ?></span>
            <span><?php echo "Price: " . $psuRow['price'] . " EUR" ?></span>
            <span><?php echo "Stock: " . $psuRow['quantity'] . " Pieces" ?></span>              
            <?php
                if (isset($_SESSION['userId'])) {
                    ?>
                        <a href="../cart/add_to_cart.php?id=<?php echo $psuRow['psu_id'] ?>&userId=<?php echo $_SESSION['userId'] ?>">Add to cart</a>
                    <?php
                }
            ?>                          
        </div>
        <?php
        }
    ?>

<?php
    if($caseRow['category'] === 'CASE' ){
    ?>
        <div class="show-comp">
            <img src="<?php echo $caseRow['img'] ?>" alt="img failed to load">
            <h3><?php echo $caseRow['name'] ?></h3>
            <p><span>Description:</span><?php echo $caseRow['description'] ?></p>
            <span><?php echo "Form-Factor: " . $caseRow['form_factor'] ?></span>
            <span><?php echo "Material: " . $caseRow['material']. " GB " ?></span>
            <span><?php echo "Size: " . $caseRow['size'] ?></span>
            <span><?php echo "Fan size: " . $caseRow['fan']. " mm " ?></span>
            <span><?php echo "Cooler height: " . $caseRow['cooler_height']. " mm " ?></span>
            <span><?php echo "Psu: " . $caseRow['psu'] ?></span>
            <span><?php echo "Color: " . $caseRow['color'] ?></span>
            <span><?php echo "Stock: " . $caseRow['price'] . " EUR" ?></span>
            <span><?php echo "Stock: " . $caseRow['quantity'] . " Pieces" ?></span>              
            <?php
                if (isset($_SESSION['userId'])) {
                    ?>
                        <a href="../cart/add_to_cart.php?id=<?php echo $caseRow['case_id'] ?>&userId=<?php echo $_SESSION['userId'] ?>">Add to cart</a>
                    <?php
                }
            ?>                          
        </div>
        <?php
        }
    ?>

<?php
    if($mntRow['category'] === 'MONITOR' ){
    ?>
        <div class="show-comp">
            <img src="<?php echo $mntRow['img'] ?>" alt="img failed to load">
            <h3><?php echo $mntRow['name'] ?></h3>
            <p><span>Description:</span><?php echo $mntRow['description'] ?></p>
            <span><?php echo "Resolution: " . $mntRow['resolution']. " px "  ?></span>
            <span><?php echo "Frequence: " . $mntRow['freq']. " Hz " ?></span>
            <span><?php echo "Matrix type: " . $mntRow['matrix_type'] ?></span>
            <span><?php echo "Responsive time: " . $mntRow['responsive_time']. " ms " ?></span>
            <span><?php echo "Avaiable inputs: " . $mntRow['inputs']?></span>
            <span><?php echo "Price: " . $mntRow['price'] . " EUR" ?></span>
            <span><?php echo "Stock: " . $mntRow['quantity'] . " Pieces" ?></span>              
            <?php
                if (isset($_SESSION['userId'])) {
                    ?>
                        <a href="../cart/add_to_cart.php?id=<?php echo $mntRow['monitor_id'] ?>&userId=<?php echo $_SESSION['userId'] ?>">Add to cart</a>
                    <?php
                }
            ?>                          
        </div>
        <?php
        }
    ?>

<?php
    if($keyRow['category'] === 'KEYBOARD' ){
    ?>
        <div class="show-comp">
            <img src="<?php echo $keyRow['img'] ?>" alt="img failed to load">
            <h3><?php echo $keyRow['name'] ?></h3>
            <p><span>Description:</span><?php echo $keyRow['description'] ?></p>
            <span><?php echo "Type: " . $keyRow['type'] ?></span>
            <span><?php echo "Size: " . $keyRow['size'] ?></span>
            <span><?php echo "RGB: " . $keyRow['rgb'] ?></span>
            <span><?php echo "Price: " . $keyRow['price'] . " EUR" ?></span>
            <span><?php echo "Stock: " . $keyRow['quantity'] . " Pieces" ?></span>              
            <?php
                if (isset($_SESSION['userId'])) {
                    ?>
                        <a href="../cart/add_to_cart.php?id=<?php echo $keyRow['keyboard_id'] ?>&userId=<?php echo $_SESSION['userId'] ?>">Add to cart</a>
                    <?php
                }
            ?>                          
        </div>
        <?php
        }
    ?>

<?php
    if($msRow['category'] === 'MOUSE' ){
    ?>
        <div class="show-comp">
            <img src="<?php echo $msRow['img'] ?>" alt="img failed to load">
            <h3><?php echo $msRow['name'] ?></h3>
            <p><span>Description:</span><?php echo $msRow['description'] ?></p>
            <span><?php echo "Design: " . $msRow['design'] ?></span>
            <span><?php echo "Sensor: " . $msRow['sensor']?></span>
            <span><?php echo "Dpi: " . $msRow['sens_dpi'] ?></span>
            <span><?php echo "Interface connection: " . $msRow['conn_interface'] ?></span>
            <span><?php echo "Wire length: " . $msRow['wire_length'] . " mm" ?></span>
            <span><?php echo "Weight: " . $msRow['weight'] . " g" ?></span>  
            <span><?php echo "Price: " . $msRow['price'] . " EUR" ?></span>
            <span><?php echo "Stock: " . $msRow['quantity'] . " Pieces" ?></span>              
            <?php
                if (isset($_SESSION['userId'])) {
                    ?>
                        <a href="../cart/add_to_cart.php?id=<?php echo $msRow['mouse_id'] ?>&userId=<?php echo $_SESSION['userId'] ?>">Add to cart</a>
                    <?php
                }
            ?>                          
        </div>
        <?php
        }
    ?>

<?php
    if($mspRow['category'] === 'MOUSE_PAD' ){
    ?>
        <div class="show-comp">
            <img src="<?php echo $mspRow['img'] ?>" alt="img failed to load">
            <h3><?php echo $mspRow['name'] ?></h3>
            <p><span>Description:</span><?php echo $mspRow['description'] ?></p>
            <span><?php echo "Material: " . $mspRow['material'] ?></span>
            <span><?php echo "Size: " . $mspRow['size']?></span>
            <span><?php echo "RGB: " . $mspRow['rgb'] ?></span>
            <span><?php echo "Price: " . $mspRow['price'] . " EUR" ?></span>
            <span><?php echo "Stock: " . $mspRow['quantity'] . " Pieces" ?></span>              
            <?php
                if (isset($_SESSION['userId'])) {
                    ?>
                        <a href="../cart/add_to_cart.php?id=<?php echo $mspRow['pad_id'] ?>&userId=<?php echo $_SESSION['userId'] ?>">Add to cart</a>
                    <?php
                }
            ?>                          
        </div>
        <?php
        }
    ?>
    <?php
    if($armRow['category'] === 'ARMCHAIR' ){
    ?>
        <div class="show-comp">
            <img src="<?php echo $armRow['img'] ?>" alt="img failed to load">
            <h3><?php echo $armRow['name'] ?></h3>
            <p><span>Description:</span><?php echo $armRow['description'] ?></p>
            <span><?php echo "Max Weight suported: " . $armRow['max_weight']. " kg" ?></span>
            <span><?php echo "Color: " . $armRow['color']?></span>
            <span><?php echo "Weight: " . $armRow['weight']. " kg " ?></span>
            <span><?php echo "Material: " . $armRow['material'] ?></span>
            <span><?php echo "Price: " . $armRow['price'] . " EUR" ?></span>
            <span><?php echo "Stock: " . $armRow['quantity'] . " Pieces" ?></span>              
            <?php
                if (isset($_SESSION['userId'])) {
                    ?>
                        <a href="../cart/add_to_cart.php?id=<?php echo $armRow['armchair_id'] ?>&userId=<?php echo $_SESSION['userId'] ?>">Add to cart</a>
                    <?php
                }
            ?>                          
        </div>
        <?php
        }
    ?>


    </main>
</body>
</html>