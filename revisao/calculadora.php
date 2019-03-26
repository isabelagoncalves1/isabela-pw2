<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="calcular.php">
            Número 1:<input type="text" name="n1">
            Número 2:<input type="text" name="n2">
            
            <br><br>
           Escolha a operação a ser realizada:
           
           <br>
           
           <input type="radio" name="ope" value="soma">
           <label>Soma</label><br>
           <input type="radio" name="ope" value="sub">
           <label>Subtração</label><br>
           <input type="radio" name="ope" value="mult">
           <label>Multiplicação</label><br>
           <input type="radio" name="ope" value="div">
           <label>Divisão</label><br><br>
           
           <button type="submit">Enviar</button>
          
           
    </body>
</html>
