<?php
    include '../dbh.php';
    session_start();
    $sql = 'SELECT * FROM pc';
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    

    foreach($result as $row):
         if (isset($_SESSION['userId'])) 
         {
        echo "<div class='pc-load'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
            <p>{$row['description']}</p>            
            <br>
            <span>Price: {$row['price']}EUR</span>
            <a href='show_pc.php?id={$row['pc_id']}'>Detail</a>
           <a href='../cart/add_to_cart.php?id={$row['pc_id']} &userId= {$_SESSION['userId']} '>Add to cart</a>
            </div>";
        }else{
            echo "<div class='pc-load'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
            <p>{$row['description']}</p>            
            <br>
            <span>Price: {$row['price']}EUR</span>
            <a href='show_pc.php?id={$row['pc_id']}'>Detail</a>
          
            </div>";
        }
        
    endforeach; 
    ?>

   