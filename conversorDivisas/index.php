<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conversor de divisas</title>
    </head>
    <body>
        <h1>Conversor de divisas</h1>
        <div>
            <form name="FormularioConversor" action="conversor.php" method="POST">
                <div>
                    <label for="Divisa">Divisa </label>
                    <select id="Divisa" name="divisa[monedaOrigen]">
                        <option value="Euro">Euro</option>
                        <option value="Dolar">Dolar</option>
                        <option value="Libra">Libra</option>
                        <option value="Yuan">Yuan</option>
                    </select>
                    <label for="Cantidad"> Cantidad</label>
                    <input id="Cantidad" type="text" required="required" name="divisa[cantidadOrigen]" size="5">
                </div>
                <br>
                <div>
                    <label for="Divisa">Divisa </label>
                    <select id="Divisa" name="divisa[monedaDestino]">
                        <option value="Euro">Euro</option>
                        <option value="Dolar">Dolar</option>
                        <option value="Libra">Libra</option>
                        <option value="Yuan">Yuan</option>
                    </select>
                </div>
                <br>
                <input type="submit" 
                       value="Enviar" name="botonenvio" /> 
            </form>
        </div>
    </body>
</html>
