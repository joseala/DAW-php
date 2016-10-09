<?php
if(!isset($_POST['enviar'])){
    header('Location: http://localhost:8000');
}
function ordena ($a,$b){
    if ($a == $b) {
        return 0;
        }
return ($a < $b) ? -1 : 1;
}
$secuencia=$_POST['secuencia'];
$arraySecuencia = explode(',',$secuencia);
usort ($arraySecuencia,"ordena");
$tamañoArray = count($arraySecuencia);//Devuelve tamaño del array.
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Los valores del array son: </h1>
        <?php for($x=1;$x<$tamañoArray-1;$x++){?>
            <h2> <?php echo $arraySecuencia[$x] ;?> </h2>
        <?php } ?>
        <form name="formularioPalabra" action="index.php" method="POST">
            <br>
            <input type="submit" value="Confirmar" name="confirmar"/>
        </form>
    </body>
</html>


