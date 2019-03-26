<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "Números ímpares:";?><br><br>
            
            <?php
            for($i=0;$i<=4;$i++){    
                 if($vetor[$i] % 2 == 1){
                 echo $vetor[$i];
                 echo"<br>";
                }
            }
        ?>
    </body>
</html>
