<?php
//include('Conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="images/fish.png">
    <link rel="stylesheet" type="text/css" href="/Login_UserStyle.css">
</head>
<body>

<div class="Grid-Container">
            <div class="item">
                <div class="arcshape"></div>
                <div>
                    <h1>Welcome to PondTech</h1>
                </div>
                <div class="arcshape1"></div>
                <div class="Grid-Form-Container">
                    <div class="Image-Form"><img src="images/koi.png" alt="koi"/></div>
                    <form action="Login_User_Backend/Login_user_function.php" method="POST" class="LoginForm">
                        <div><img src="images/fish.png" alt="fish"/> </div>
                        <div class="FormItems">
                            <h2>Login</h2>
                            <label>Username</label>
                            <input type="text" id="username" required>
                            <label>Password</label>
                            <input type="password" id="password" required>
                            <button type="submit"> LOGIN </button>
                        </div>
                        <div>Don't have an account yet?&nbsp;<a href="#">Sign Up</a></div>
                    </form>
                </div>
            </div>
</div>

</body>
</html>