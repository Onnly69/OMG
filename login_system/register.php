<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
    <title>OMG | Register</title>
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
        <div class="register">
            <form class="register-form">
                <label for="login">Login:</label>
                <input type="text" id="login" placeholder="Ex: User112">
                <label for="password">Password:</label>
                <input type="password" id="password" placeholder="Ex: Pass112">
                <label for="password2">Confirm password:</label>
                <input type="password" id="password2" placeholder="Ex: Pass112">
                <label for="fullname">Complet name:</label>
                <input type="text" id="fullname" placeholder="Ex: Mark Marin Markovich">
                <label for="email">Email:</label>        
                <input type="email" id="email" placeholder="Ex: markovich@gmail.com">
                
                <label for="country">Country:</label>
                <select id="country">
                    <option value="moldova">Moldova</option>
                    <option value="transnistria">Transnistria</option>
                    <option value="ucraina">Ucraina</option>
                    <option value="romania">Romania</option>
                </select>
                <label for="address">Adress:</label>
                <input type="text" id="address" placeholder="Ex: Chisinau, Bd. Dacia 156/3">
                <input type="submit" value="Register">
                <span>Have an account already? <a href="login.php">Log in</a></span>            </form>
            
        </div>
    </main>
    <script src="register.js"></script>
</body>
</html>