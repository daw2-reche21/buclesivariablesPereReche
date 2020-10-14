<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Exercici 1 dates</title>
    </head>
    <body>
       
            <?php
                 date_default_timezone_set('UTC');
                 echo "<p>Yesterday it was ".$diaAnterior.date('l', strtotime('-1 day'))."</p>";
                echo "<p>The previous month was ".$mesAnterior.date('F', strtotime('-1 month'))."</p>";
                $diaHoy=intval(date('j'));
                $diasMes=intval(date('t'));
                $diaRestantes=($diasMes-$diaHoy);
                  echo "<p>There are ". $diaRestantes." days left in this month.</p>";
                $MesHoy=intval(date('m'));
                $MesRestantes=(13-$MesHoy);
                  echo "<p>There are ". $MesRestantes." months left in the current year.</p>";
                
              function saludoEstacion(){
                    
                $VeranoInvierno=intval(date('n'));
                
                        
                        if($VeranoInvierno>1 && $VeranoInvierno<=3){
                            echo "<p>Good Winter!</p>";
                        }
                        if($VeranoInvierno>=4 && $VeranoInvierno<=6){
                            echo "<p>Good Spring!</p>";
                        }
                        if($VeranoInvierno>=7 && $VeranoInvierno<=9){
                            echo "<p>Good Summer!</p>";
                        }
                        if($VeranoInvierno>=10 && $VeranoInvierno<=12){
                            echo "<p>Good Fall!</p>";
                        }
                

              };

              saludoEstacion();
              
                  

                  

            ?>
            <?php include "footer.php";?>
    </body>
</html>
