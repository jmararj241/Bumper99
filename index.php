<?php
require 'header/header.php'

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice_Bumper99</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!--Formulario de Login-->
    <h1>Login</h1>
    <form method="post" action="login.php" name="signin-form">
        <div class="form-element">
            <label>Username</label>
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Password</label>
            <input type="password" name="password" required />
        </div>
        <button type="submit" name="login" value="login">Log In</button>
    </form>



    <!--Formulario de Registro-->
    <h1>Register</h1>
    <form method="post" action="register.php" name="signup-form" value="signup-form">
        <div class="form-element">
            <label>Username</label>
            <input type="text" name="username-r" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Email</label>
            <input type="email" name="email" required />
         </div>
        <div class="form-element">
            <label>Password</label>
            <input type="password" name="password-r" required />
        </div>
            <button type="submit" name="register" value="register">Register</button>
    </form>
    <?php
    
   
    
    ?>
</body>
</html>
