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
        $id=$_GET["id"];
        
        switch($id){
            case "1":
                echo"Esse é o primeiro link  ";
                break;
            case "2":
                echo"Esse é o segundo link  ";
                break;
            case "3":
                echo"Esse é o terceiro link ";
                break;
            case "4":
                echo"Esse é o quarto link ";
                break;
            case "5":
                echo"Esse é o quinto link ";
                break;
            case "6":
                echo"Esse é o sexto link";
                break;
            case "7":
                echo"Esse é o sétimo link";
                break;
            case "8":
                echo"Esse é o oitavo link ";
                break;
            case "9":
                echo"Esse é o nono link";
                break;
            case "10":
                echo"Esse é o décimo link";
                break;
        }
        ?>
    </body>
</html>
