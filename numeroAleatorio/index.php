<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Numero Aleatorio</title>
    </head>
    <body>
        <h1>Encuentra el numero aleatorio</h1>
        <br> 
        <form name="Formulario" action="aleatorio.php" method="POST">
            <div>
                <label for="limiteSuperior">Limite Superior:  </label>
                <input id="limiteSuperior" type="number" name="numeros[0]" size="2">
            </div>
            <br> 
            <div>
                <label for="limiteInferior">Limite Inferior:  </label>
                <input id="limiteInferior" type="number" name="numeros[1]" size="2">
            </div>
            <br> 
            <div>
                <label for="numeroRango">Numero en rango:  </label>
                <input id="numeroRango" type="number" name="numeros[2]" size="2">
            </div>
            <br>    
            <input type="submit" value="Generar" name="generar">  
        </form>
    </body>
</html>
