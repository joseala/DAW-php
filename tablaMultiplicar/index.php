<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabla de multiplicar</title>
    </head>
    <body>
        <h1>Genera tabla de multiplicar</h1>
        <form name="Formulario1" action="tabla.php" method="POST">
            <div>
                <label for="Numero"> Introduce numero: </label>
                <input id="Numero" type="text" size="1" name="numero"> 
            </div>
            <br>
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <br>
        <form name="Formulario2" action="rango.php" method="POST">
            <div>
                <label for="Rango"> Introduce rango de numeros: </label>
                <input id="rango" type="text" size="10" name="rango"> 
            </div>
            <br>
            <input type="submit" value="Enviar" name="enviar">
        </form>
        
    </body>
</html>
