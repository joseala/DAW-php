<?php
if(!isset($_POST['enviar'])){
    header('Location: http://localhost:8000');
}
/*
 * Ordena array por valor de menor a mayor.
 */
function ordena ($a,$b){
    if ($a == $b) {
        return 0;
        }
return ($a < $b) ? -1 : 1;
}
/*Comprueba valores de array pasado por parametro
 * si todos son numericos devuelve true,
 * si hay alguno que no es numerico devuelve false.
 */
function comprobarValorNumerico($array){//  
    $devuelve = true;
    foreach($array as $index => $value){
        if(!is_numeric($value)){
            $devuelve = false;
        }
    }
    
    return $devuelve;
}

$secuencia=$_POST['secuencia'];
$arrayLimpio = explode(',',$secuencia);//Quita las comas de la cadena
$arraySecuencia = array_unique($arrayLimpio);//Devuelve array sin valores repetidos
usort ($arraySecuencia,"ordena");//Ordena array de menor a mayo por valor
$tamañoArray = count($arraySecuencia);//Devuelve tamaño del array.
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
            if(!comprobarValorNumerico($arraySecuencia) || $tamañoArray<3){ //Comprueba que todos los valores sean numericos o que haya 3 valores minimo?>
                <h1>Introduce valores numerico entre 1 y 9</h1>
                <h1>Introduce al menos 3 distintos</h1>
                 <form name="Formulario" action="index.php" method="POST"><!--Para repetir formulario-->   
                    <input type="submit" value="Volver" name="volver">  
                </form>
      <?php }else{ ?>
                <h1>Los valores del array son: </h1>
          <?php for($x=1;$x<$tamañoArray-1;$x++){//No itera por el primer ni el ultimo valor del array?>
                    <h2> <?php echo $arraySecuencia[$x] ;?> </h2>
          <?php } ?>
                <form name="formularioPalabra" action="index.php" method="POST">
                <br>
                <input type="submit" value="Confirmar" name="confirmar"/>
                </form>   
        <?php } ?>
    </body>
</html>
