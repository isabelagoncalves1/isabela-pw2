<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $vetor=array();
        $vetor[0]= $_POST["numero1"]
            $n1 = $_POST["numero1"];
            $n2 = $_POST["numero2"];
            $n3 = $_POST["numero3"];
            $n4 = $_POST["numero4"];
            $n5 = $_POST["numero5"];
            
            $alo = array();
            
            
            if (($n1>$n2 && $n1>$n3 && $n1>$n4 && $n1>$n5)){
                $maior = $n1;  
                $alo [0] = $n1;
            }
            
            
            if (($n2>$n1 && $n2>$n3 && $n2>$n4 && $n1>$n5)){
                $maior = $n2;
                 $alo [0] = $n2;
            }
            
           
            
            if (($n3>$n1 && $n3>$n2 && $n3>$n4 && $n1>$n5)){
                $maior = $n3;
            $alo [0] = $n3;
                
            }
         
            
            if (($n4>$n1 && $n4>$n2 && $n4>$n3 && $n4>$n5)){
                $maior = $n4;
                $alo [0] = $n4;
            }
           
            
            if (($n5>$n1 && $n5>$n2 && $n5>$n3 && $n5>$n4)){
                $maior = $n5;
                $alo [0] = $n5;
            }
            
            $maior = 0;
            for($i)
            
            echo "O maior número é \n". $alo [0];
            ?>
        <br><br>
        <?php
            
            
            $cont=0;
            for ($i=1; $i<=$n1; $i++){
                if ($n1%$i==0){
                    $cont++;
                }
            }
            if ($cont==2){
                echo $n1;
            }else{
                break;
            }
        ?>
    </body>
</html>
