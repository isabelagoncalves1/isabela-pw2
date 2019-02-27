<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício 3</title>
    </head>
    <body>
        <?php
            $soma = 0;
            
            for ($i=0; $i<=30; $i++){
                $v = $i;
                $soma = $soma + $v;
               
            }
            
            echo "O mair número é \n". $v. " \n na posição \n" . ($i-1). "<br>";
            echo "A soma de todos os valores é \n". $soma. "<br>";
            echo "O valor da média é \n". ($soma/30);
        ?>
    </body>
</html>
