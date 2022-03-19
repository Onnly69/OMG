<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">

    <title>OMG | Login</title>
</head>
<body>
    <main>
    <nav id="nav-bar">
            <div class="links">
                <a href="../index.php"><h1>OnlyMasterGaming</h1></a>           
            </div>
            <hr>
        </nav>
     
        <img src="https://wallpaperaccess.com/full/172758.jpg" alt="">
        <div class="login">
            <form class="login-form">
                <h2>Login into system</h2>
                <input type="text" id="login" placeholder="Ex: User112">
                <br>
                <input type="password" id="password" placeholder="your password">
                <br>
                <input type="submit" value="Log in">
                <span> Need an account? <a href="register.php">Register</a></span>

            </form>
        </div>
    </main>

    <script src="login.js"></script>
</body>
</html>