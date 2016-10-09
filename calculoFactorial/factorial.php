<?php
if(!isset($_POST['factorizar'])){
    header('Location: http://localhost:8000');
}
$numero=$_POST['numero'];
$numeroActual=$numero;
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculo factorial</title>
    </head>
    <body>
        <h1 >Calculadora Factorial</h1>
        <br>
        <?php
        for($x=$numero-1;$x>0;$x--){  
            $numeroActual=$numeroActual*$x; 
        }
        ?>       
        <h3> El factorial de <?php echo $numero?> es: <?php echo $numeroActual?></h3>      
        <form name="FormularioFactorial" action="index.php" method="POST">      
            <input type="submit" value="Volver" name="volver"/>
        </form>
    </body>
</html>

