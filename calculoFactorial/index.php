<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculo factorial</title>
    </head>
    <body>
        <h1 >Calculadora Factorial</h1>
        <form name="FormularioFactorial" action="factorial.php" method="POST">
            <div>
                <label for="Numero"> Introduce numero real:</label>
                <input id="Numero" name="numero" type="number" required="required" size="10"/>
            </div>
            <br>
            <input type="submit" value="Factorizar" name="factorizar"/>
        </form>
    </body>
</html>
