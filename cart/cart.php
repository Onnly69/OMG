<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <title>Cart</title>
</head>
<body>
<header>
        <nav id="nav-bar">
            <div class="links">
                <a href="../index.php"><h1>OnlyMasterGaming</h1></a>
            <ul id="ul-menu">
                <ul> 
                                    
                    <li><a href="../pc_store/index_pc.php">Buy a PC</a></li>
                    <li><a href="../pc_component/index_component.php">Buy accessories</a></li>
                    <li><a href="../pc_constructor/pc_constructor.php">Build a PC</a></li>
                    
                    <li><a href="../pc_component/add_component.php"><img src="https://cdn-icons-png.flaticon.com/512/992/992651.png" alt="Cart"></a></li> 
                    <li><a href="../login_system/profile.php"><img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="User"></a></li>
                    <li><a href="cart.php"><img src="https://uxwing.com/wp-content/themes/uxwing/download/19-e-commerce-currency-shopping/shopping-cart.png" alt="Add"></a></li>    
                              
                </ul>
            </ul>
            </div>
            <hr>
        </nav>
    </header>

    <main>
        <div class="main-cart">
        <?php
            include '../dbh.php';
            session_start();
            $id = $_SESSION['userId'];

            
                    
            $sql = "SELECT * FROM user WHERE user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $cart = $row['cart'];
            $cartArr = explode(" ", $cart);
            
            foreach($cartArr as $item){
                $sql = "SELECT * FROM mother WHERE mother_id = '{$item}'";
                
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
               
                 if($item>0){
                       error_reporting(0);
                        if ($row['category'] === 'MOTHERBOARD' ){
  
?>
               <div class="cart">
                        <img src="<?php echo $row['img'] ?>" height="50px">  
                        <span><?php echo $row['name'] ?></span>                      
                        <span><?php echo $row['price'] ?>EUR</span>  
                        <a href="delete_cart.php?motherId=<?php echo $row['mother_id'] ?>&userId=<?php echo $id ?>">Delete<a>               
                    </div>
                    <?php
                  }
                }
             }
            ?>

<?php
            $sql = "SELECT * FROM user WHERE user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $cart = $row['cart'];
            $cartArr = explode(" ", $cart);
            
            foreach($cartArr as $item){    
                $sql = "SELECT * FROM pc WHERE pc_id = '{$item}'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if($item>0){                  
                    if ($row['category'] === 'PC' ){
                        
               
?>
               <div class="cart">
                        <img src="<?php echo $row['img'] ?>" height="50px">  
                        <span><?php echo $row['name'] ?></span>                      
                        <span><?php echo $row['price'] ?>EUR</span>  
                        <a href="delete_cart.php?pcId=<?php echo $row['pc_id'] ?>&userId=<?php echo $id ?>">Delete<a>               
                    </div>
                    <?php
                    }
                }
            }           
        ?>

<?php
            $sql = "SELECT * FROM user WHERE user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $cart = $row['cart'];
            $cartArr = explode(" ", $cart);
            
            foreach($cartArr as $item){   
                
                $sql = "SELECT * FROM cpu WHERE cpu_id = '{$item}'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if($item>0){                  
                    if ($row['category'] === 'CPU' ){
                        
               
?>
               <div class="cart">
                        <img src="<?php echo $row['img'] ?>" height="50px">  
                        <span><?php echo $row['name'] ?></span>                      
                        <span><?php echo $row['price'] ?>EUR</span>  
                        <a href="delete_cart.php?cpuId=<?php echo $row['cpu_id'] ?>&userId=<?php echo $id ?>">Delete<a>               
                    </div>
                    <?php
                    }
                }
            }           
        ?>

<?php
            $sql = "SELECT * FROM user WHERE user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $cart = $row['cart'];
            $cartArr = explode(" ", $cart);
            
            foreach($cartArr as $item){   
               
                $sql = "SELECT * FROM cooler WHERE cooler_id = '{$item}'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if($item>0){                  
                    if ($row['category'] === 'COOLER' ){             
?>
               <div class="cart">
                        <img src="<?php echo $row['img'] ?>" height="50px">  
                        <span><?php echo $row['name'] ?></span>                      
                        <span><?php echo $row['price'] ?>EUR</span>  
                        <a href="delete_cart.php?coolerId=<?php echo $row['cooler_id'] ?>&userId=<?php echo $id ?>">Delete<a>               
                    </div>
                    <?php
                    }
                }
            }           
        ?>

<?php
            $sql = "SELECT * FROM user WHERE user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $cart = $row['cart'];
            $cartArr = explode(" ", $cart);
            
            foreach($cartArr as $item){   
               
                $sql = "SELECT * FROM ram WHERE ram_id = '{$item}'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if($item>0){                  
                    if ($row['category'] === 'RAM' ){             
?>
               <div class="cart">
                        <img src="<?php echo $row['img'] ?>" height="50px">  
                        <span><?php echo $row['name'] ?></span>                      
                        <span><?php echo $row['price'] ?>EUR</span>  
                        <a href="delete_cart.php?ramId=<?php echo $row['ram_id'] ?>&userId=<?php echo $id ?>">Delete<a>               
                    </div>
                    <?php
                    }
                }
            }           
        ?>

<?php
            $sql = "SELECT * FROM user WHERE user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $cart = $row['cart'];
            $cartArr = explode(" ", $cart);
            
            foreach($cartArr as $item){   
               
                $sql = "SELECT * FROM storage WHERE storage_id = '{$item}'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if($item>0){                  
                    if ($row['category'] === 'STORAGE' ){             
?>
               <div class="cart">
                        <img src="<?php echo $row['img'] ?>" height="50px">  
                        <span><?php echo $row['name'] ?></span>                      
                        <span><?php echo $row['price'] ?>EUR</span>  
                        <a href="delete_cart.php?storageId=<?php echo $row['storage_id'] ?>&userId=<?php echo $id ?>">Delete<a>               
                    </div>
                    <?php
                    }
                }
            }           
        ?>

<?php
            $sql = "SELECT * FROM user WHERE user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $cart = $row['cart'];
            $cartArr = explode(" ", $cart);
            
            foreach($cartArr as $item){   
               
                $sql = "SELECT * FROM videocard WHERE gpu_id = '{$item}'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if($item>0){                  
                    if ($row['category'] === 'GPU' ){             
?>
               <div class="cart">
                        <img src="<?php echo $row['img'] ?>" height="50px">  
                        <span><?php echo $row['name'] ?></span>                      
                        <span><?php echo $row['price'] ?>EUR</span>  
                        <a href="delete_cart.php?gpuId=<?php echo $row['gpu_id'] ?>&userId=<?php echo $id ?>">Delete<a>               
                    </div>
                    <?php
                    }
                }
            }           
        ?>

<?php
            $sql = "SELECT * FROM user WHERE user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $cart = $row['cart'];
            $cartArr = explode(" ", $cart);
            
            foreach($cartArr as $item){   
               
                $sql = "SELECT * FROM psu WHERE psu_id = '{$item}'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if($item>0){                  
                    if ($row['category'] === 'PSU' ){             
?>
               <div class="cart">
                        <img src="<?php echo $row['img'] ?>" height="50px">  
                        <span><?php echo $row['name'] ?></span>                      
                        <span><?php echo $row['price'] ?>EUR</span>  
                        <a href="delete_cart.php?psuId=<?php echo $row['psu_id'] ?>&userId=<?php echo $id ?>">Delete<a>               
                    </div>
                    <?php
                    }
                }
            }           
        ?>

<?php
            $sql = "SELECT * FROM user WHERE user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $cart = $row['cart'];
            $cartArr = explode(" ", $cart);
            
            foreach($cartArr as $item){   
               
                $sql = "SELECT * FROM cases WHERE case_id = '{$item}'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if($item>0){                  
                    if ($row['category'] === 'CASE' ){             
?>
               <div class="cart">
                        <img src="<?php echo $row['img'] ?>" height="50px">  
                        <span><?php echo $row['name'] ?></span>                      
                        <span><?php echo $row['price'] ?>EUR</span>  
                        <a href="delete_cart.php?caseId=<?php echo $row['case_id'] ?>&userId=<?php echo $id ?>">Delete<a>               
                    </div>
                    <?php
                    }
                }
            }           
        ?>

<?php
            $sql = "SELECT * FROM user WHERE user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $cart = $row['cart'];
            $cartArr = explode(" ", $cart);
            
            foreach($cartArr as $item){   
               
                $sql = "SELECT * FROM monitor WHERE monitor_id = '{$item}'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if($item>0){                  
                    if ($row['category'] === 'MONITOR' ){             
?>
               <div class="cart">
                        <img src="<?php echo $row['img'] ?>" height="50px">  
                        <span><?php echo $row['name'] ?></span>                      
                        <span><?php echo $row['price'] ?>EUR</span>  
                        <a href="delete_cart.php?monitorId=<?php echo $row['monito_id'] ?>&userId=<?php echo $id ?>">Delete<a>               
                    </div>
                    <?php
                    }
                }
            }           
        ?>

<?php
            $sql = "SELECT * FROM user WHERE user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $cart = $row['cart'];
            $cartArr = explode(" ", $cart);
            
            foreach($cartArr as $item){   
               
                $sql = "SELECT * FROM keyboard WHERE keyboard_id = '{$item}'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if($item>0){                  
                    if ($row['category'] === 'KEYBOARD' ){             
?>
               <div class="cart">
                        <img src="<?php echo $row['img'] ?>" height="50px">  
                        <span><?php echo $row['name'] ?></span>                      
                        <span><?php echo $row['price'] ?>EUR</span>  
                        <a href="delete_cart.php?keyboardId=<?php echo $row['keyboard_id'] ?>&userId=<?php echo $id ?>">Delete<a>               
                    </div>
                    <?php
                    }
                }
            }           
        ?>

<?php
            $sql = "SELECT * FROM user WHERE user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $cart = $row['cart'];
            $cartArr = explode(" ", $cart);
            
            foreach($cartArr as $item){   
               
                $sql = "SELECT * FROM mouse WHERE mouse_id = '{$item}'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if($item>0){                  
                    if ($row['category'] === 'MOUSE' ){             
?>
               <div class="cart">
                        <img src="<?php echo $row['img'] ?>" height="50px">  
                        <span><?php echo $row['name'] ?></span>                      
                        <span><?php echo $row['price'] ?>EUR</span>  
                        <a href="delete_cart.php?mouseId=<?php echo $row['mouse_id'] ?>&userId=<?php echo $id ?>">Delete<a>               
                    </div>
                    <?php
                    }
                }
            }           
        ?>

<?php
            $sql = "SELECT * FROM user WHERE user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $cart = $row['cart'];
            $cartArr = explode(" ", $cart);
            
            foreach($cartArr as $item){   
               
                $sql = "SELECT * FROM mouse_pad WHERE pad_id = '{$item}'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if($item>0){                  
                    if ($row['category'] === 'MOUSE_PAD' ){             
?>
               <div class="cart">
                        <img src="<?php echo $row['img'] ?>" height="50px">  
                        <span><?php echo $row['name'] ?></span>                      
                        <span><?php echo $row['price'] ?>EUR</span>  
                        <a href="delete_cart.php?padId=<?php echo $row['pad_id'] ?>&userId=<?php echo $id ?>">Delete<a>               
                    </div>
                    <?php
                    }
                }
            }           
        ?>

<?php
            $sql = "SELECT * FROM user WHERE user_id = '{$id}'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            $cart = $row['cart'];
            $cartArr = explode(" ", $cart);
            
            foreach($cartArr as $item){   
               
                $sql = "SELECT * FROM armchair WHERE armchair_id = '{$item}'";

                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                if($item>0){                  
                    if ($row['category'] === 'ARMCHAIR' ){             
?>
               <div class="cart">
                        <img src="<?php echo $row['img'] ?>" height="50px">  
                        <span><?php echo $row['name'] ?></span>                      
                        <span><?php echo $row['price'] ?>EUR</span>  
                        <a href="delete_cart.php?armchairId=<?php echo $row['armchair_id'] ?>&userId=<?php echo $id ?>">Delete<a>               
                    </div>
                    <?php
                    }
                }
            }           
        ?>



        </div>
    </main>
</body>
</html>