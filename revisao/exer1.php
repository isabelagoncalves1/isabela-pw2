<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício1</title>
    </head>
    <body>
        <?php
            $maior=0;
            $vetor=array();
            $vetor[0] = $_GET["v1"];
            $vetor[1] = $_GET["v2"];
            $vetor[2] = $_GET["v3"];
            $vetor[3] = $_GET["v4"];
            $vetor[4] = $_GET["v5"];
            
            for($i=0;$i<=4;$i++){
                if($maior<$vetor[$i]){
                     $maior=$vetor[$i];
                }
    
            }
            echo "O maior elemento do vetor é: \n". $maior;?>
        <br><br>
        
        <?php
            
        echo "Números pares:";?><br><br>
        <?php
            for($i=0;$i<=4;$i++){    
                 if($vetor[$i] % 2 == 0){
                 echo $vetor[$i];
                 echo"<br>";
                }
            }
        ?>
        <br><br>
            
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
