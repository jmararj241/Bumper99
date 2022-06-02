<?php
require 'header/header.php';
require 'database/database.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de registro_Bumper99</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
    
        $registros = $_POST["register"];
        
        if ($registros) {
            $NombreUsuario = $_POST['username-r'];
            $Password = $_POST['password-r'];
            $Email = $_POST['email'];
            echo $NombreUsuario;
            echo $Password;
            echo $Email;
            
            if ($link) {
                $sqlInsert = "INSERT INTO usuarios (IdUsuarios,NombreUsuario, Email, Pass, Privilegios) values ('','$NombreUsuario', '$Email', '$Password', 'r')";
           
                mysqli_query ($link,$sqlInsert);

            header("Location:index.php");
           
            }
            
       }
    
    ?>
    
</body>
</html>