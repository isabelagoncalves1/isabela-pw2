<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            $n1=$_GET["n1"];
            $n2=$_GET["n2"];
            $n3=$_GET["n3"];
            $n4=$_GET["n4"];
            $operacao=$_GET["operacao"];
            
            if ($operacao=="soma"){
                $resul=$n1+$n2+$n3+$n4;
            }elseif($operacao=="subtracao"){
                $resul=$n1-$n2-$n3-$n4;
            }
            if ($operacao=="multiplicacao"){
                $resul=$n1*$n2*$n3*$n4;
            }elseif($operacao=="divisao"){
                $resul=$n1/$n2/$n3/$n4;
            }
            
            echo "O resultado é:\n". $resul;
            
        ?>
    </body>
</html>
