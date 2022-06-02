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
    <title>Página de Login_Bumper99</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
    
        $login = $_POST["login"];
        
        if ($login) {
            $NombreUsuario = $_POST['username'];
            $Password = $_POST['password'];
           
            
            if ($link) {
                $sqlSelect = "SELECT * FROM usuarios WHERE NombreUsuario = '$NombreUsuario' AND Pass = '$Password'";
           
                $resultado = mysqli_query ($link,$sqlSelect);

                $resultado = mysqli_fetch_assoc($resultado);


                if (!$resultado) {
                    echo "Hubo un error";
                    
                }
                echo $NombreUsuario;
                echo"<br>";
                echo $Password;
                header("Location:logueado.php");
            }
        }

                
            
       
    
    ?>
    
</body>
</html>