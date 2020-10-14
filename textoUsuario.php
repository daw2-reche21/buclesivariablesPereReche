<?php
session_start();

    $preferenciasUsuario=array ($_POST["fuente"],$_POST["tamanyLletra"],$_POST["colors"],$_POST["texto"]);
   
    $galeta=isset($_POST['galetes']) ? setcookie("preferenciasUsuario",json_encode($preferenciasUsuario),time()+3600) : 0;

    
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Exercici 4 formulari preferencies</title>
    </head>
    <style>
        .texto_usuario{
            font-family:<?php echo $_POST["fuente"]?>;
            font-size:<?php echo $_POST["tamanyLletra"]?>px;
            color:<?php echo $_POST["colors"]?>;
        }
         div{padding: 40px;}
    </style>   
    
    <body>

    
       
         <div>  
            <h1>Your new text!</h1>
            <?php
                echo "<p class='texto_usuario'>".$_POST["texto"]."</p>";
            ?>

        </div>  


        <?php include "footer.php";?>
    </body>
</html>