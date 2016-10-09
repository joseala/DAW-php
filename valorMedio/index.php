<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Valor Medio</title>
    </head>
    <body>
        <h1>Encuentra valor medio</h1>
        <form name="formularioPalabra" action="medio.php" method="POST">
            <div>
                <label for="introduceTexto">Intoduce 3 numeros</label>
                <input id="introduceTexto" type="text" name="numeros" size="3"/>
                <br> 
            </div>
            <br>
            <input type="submit" value="Confirmar" name="confirmar"/>
        </form>
        <h1>No muestra ni mayor ni menor</h1>
        <form name="formularioPalabra" action="niMayorNiMenor.php" method="POST">
            <div>
                <label for="introduceTexto">Intoduce numeros separados por coma </label>
                <input id="introduceTexto" type="text" name="secuencia" size="20"/>
                <br> 
            </div>
            <br>
            <input type="submit" value="Enviar" name="enviar"/>
        </form>
        <h1></h1>
        <form name="formularioPalabra" action="niMayorNiMenorMejorado.php" method="POST">
            <div>
                <label for="introduceTexto">Intoduce numeros separados por coma </label>
                <input id="introduceTexto" type="text" name="secuencia" size="20"/>
                <br> 
            </div>
            <br>
            <input type="submit" value="Enviar" name="enviar"/>
        </form>
    </body>
</html>
