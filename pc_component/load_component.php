<?php
    include '../dbh.php';
    session_start();

    $sql = 'SELECT * FROM mother';
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
    // print_r($result);

    foreach($result as $row):
        if (isset($_SESSION['userId'])) 
         {
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>            
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['mother_id']}'>Detail</a>
             <a href='../cart/add_to_cart.php?id={$row['mother_id']} &userId= {$_SESSION['userId']} '>Add to cart</a>
             <br>
             <br>
        </div>";
         }else{
            echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>            
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['mother_id']}'>Detail</a>
             <br>
             <br>
        </div>";
         }

    endforeach;

    $sql = 'SELECT * FROM cpu';
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($result as $row):
        if (isset($_SESSION['userId'])) 
         {
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['cpu_id']}'>Detail</a>
             <a href='../cart/add_to_cart.php?id={$row['cpu_id']} &userId= {$_SESSION['userId']} '>Add to cart</a>
        </div>";
         }else{
            echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['cpu_id']}'>Detail</a>
        </div>";
         }
    endforeach;
 
    $sql = 'SELECT * FROM cooler';
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($result as $row):
        if (isset($_SESSION['userId'])) 
         {
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['cooler_id']}'>Detail</a>
             <a href='../cart/add_to_cart.php?id={$row['cooler_id']} &userId= {$_SESSION['userId']} '>Add to cart</a>
        </div>";
         }else{
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['cooler_id']}'>Detail</a>
        </div>";
         }
    endforeach;

    $sql = 'SELECT * FROM ram';
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($result as $row):
        if (isset($_SESSION['userId'])) 
        {
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['ram_id']}'>Detail</a>
             <a href='../cart/add_to_cart.php?id={$row['ram_id']} &userId= {$_SESSION['userId']} '>Add to cart</a>
        </div>";
        }else{
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['ram_id']}'>Detail</a>
        </div>";
        }
        
    endforeach;

    $sql = 'SELECT * FROM storage';
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($result as $row):
        if (isset($_SESSION['userId'])) 
        {
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['storage_id']}'>Detail</a>
             <a href='../cart/add_to_cart.php?id={$row['storage_id']} &userId= {$_SESSION['userId']} '>Add to cart</a>
        </div>";
        }else{
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['storage_id']}'>Detail</a>
        </div>";
        }
    endforeach;

    $sql = 'SELECT * FROM videocard';
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($result as $row):
        if (isset($_SESSION['userId'])) 
        {
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['gpu_id']}'>Detail</a>
             <a href='../cart/add_to_cart.php?id={$row['gpu_id']} &userId= {$_SESSION['userId']} '>Add to cart</a>
        </div>";
        }else{
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['gpu_id']}'>Detail</a>
        </div>";
        }
    endforeach;

    $sql = 'SELECT * FROM psu';
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($result as $row):
        if (isset($_SESSION['userId'])) 
        {
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['psu_id']}'>Detail</a>
             <a href='../cart/add_to_cart.php?id={$row['psu_id']} &userId= {$_SESSION['userId']} '>Add to cart</a>
        </div>";
        }else{
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['psu_id']}'>Detail</a>
        </div>";
        }
    endforeach;

    $sql = 'SELECT * FROM cases';
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($result as $row):
        if (isset($_SESSION['userId'])) 
        {
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['case_id']}'>Detail</a>
             <a href='../cart/add_to_cart.php?id={$row['case_id']} &userId= {$_SESSION['userId']} '>Add to cart</a>
        </div>";
        }else{
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['case_id']}'>Detail</a>
        </div>";
        }
    endforeach;

    $sql = 'SELECT * FROM monitor';
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($result as $row):
        if (isset($_SESSION['userId'])) 
        {
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['monitor_id']}'>Detail</a>
             <a href='../cart/add_to_cart.php?id={$row['monitor_id']} &userId= {$_SESSION['userId']} '>Add to cart</a>
        </div>";
        }else{
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['monitor_id']}'>Detail</a>
        </div>";
        }
    endforeach;

    $sql = 'SELECT * FROM keyboard';
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($result as $row):
        if (isset($_SESSION['userId'])) 
        {
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['keyboard_id']}'>Detail</a>
             <a href='../cart/add_to_cart.php?id={$row['keyboard_id']} &userId= {$_SESSION['userId']} '>Add to cart</a>
        </div>";
        }else{
        echo "<div class='load-comp'>
        <img src='{$row['img']}' height='250px'>
        <h3>{$row['name']}</h3>
                   
        <br>
        <span>Pret: {$row['price']}EUR</span>
         <a href='show_component.php?id={$row['keyboard_id']}'>Detail</a>
    </div>";
        }

    endforeach;

    $sql = 'SELECT * FROM mouse';
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($result as $row):
        if (isset($_SESSION['userId'])) 
        {
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['mouse_id']}'>Detail</a>
             <a href='../cart/add_to_cart.php?id={$row['mouse_id']} &userId= {$_SESSION['userId']} '>Add to cart</a>
        </div>";
        }else{
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['mouse_id']}'>Detail</a>
        </div>";
        }
    endforeach;

    $sql = 'SELECT * FROM mouse_pad';
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($result as $row):
        if (isset($_SESSION['userId'])) 
        {
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['pad_id']}'>Detail</a>
             <a href='../cart/add_to_cart.php?id={$row['pad_id']} &userId= {$_SESSION['userId']} '>Add to cart</a>
        </div>";
        }else{
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['pad_id']}'>Detail</a>
        </div>";
        }   
    endforeach;

    $sql = 'SELECT * FROM armchair';
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    foreach($result as $row):
        if (isset($_SESSION['userId'])) 
        {
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['armchair_id']}'>Detail</a>
             <a href='../cart/add_to_cart.php?id={$row['armchair_id']} &userId= {$_SESSION['userId']} '>Add to cart</a>
        </div>";
        }else{
        echo "<div class='load-comp'>
            <img src='{$row['img']}' height='250px'>
            <h3>{$row['name']}</h3>
                       
            <br>
            <span>Pret: {$row['price']}EUR</span>
             <a href='show_component.php?id={$row['armchair_id']}'>Detail</a>
        </div>";
        }
    endforeach;

   

    
