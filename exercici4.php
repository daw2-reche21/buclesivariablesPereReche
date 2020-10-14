<?php
session_start();

if(empty($_SESSION['cont'])){
    $_SESSION['cont']=1;
    echo "Enhorabuena! Es tu primera visita a esta web </br>";
}else{
    $_SESSION['cont']++;
    echo "Llevas ".$_SESSION['cont']." visitas a esta web</br>";
}



?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Exercici 4 formulari preferencies</title>
    </head>
    <style>
        label{padding: 10px;}
        div{padding: 40px;}
        input{margin: 10px;}
    </style>    
    
    <body>

    
         <div>  
            <h1>Write a text and style it as you want</h1>
            <form method="post" action="textoUsuario.php">
                <label for="texto">Write your text:</label>
                <input type="text" name="texto" required size="50px" /><br/>
                
                <label for="colors">Choose your color bro:</label>
                <input type="color" name="colors" value="#000000"/><br/>

                <label for="tamanyLletra">Choose your font size from 1px to 100px:  1px</label>
                <input type="range" list="tamany" name="tamanyLletra" min="1" max="100">
                <datalist id="tamany">
                    <?PHP
                        $valor=1;
                        do{
                            echo "<option value=".$valor.">";
                            $valor++;
                        }while($valor<100) 
                    ?>  
                </datalist>
                <br/> 
                <p>Select your favorite font:<br>

                <label><input type="radio" name="fuente" value="Arial">Arial</label><br>

                <label><input type="radio" name="fuente" value="Helvetica" checked>Helvetica</label><br>

                 <label><input type="radio" name="fuente" value='Times New Roman'>Times New Roman</label><br>
                 <label><input type="radio" name="fuente" value='Comic Sans MS'>Comic Sans</label>

                </p>
                <br/>
                <label>Allow cookies?</label>
                <input type="checkbox" name="galetes">
                <br/>

  

                <input type="submit" name="aceptar" value="Dale"/>
            
            </form>
        </div>  
        <?php include "footer.php";?>
    </body>
</html>