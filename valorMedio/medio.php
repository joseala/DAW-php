<?php
if(!isset($_POST['confirmar'])){
    header('Location: http://localhost:8000');
}

$numeros=$_POST['numeros'];
$arrayNumeros=  str_split($numeros);//Conbierte String en array
$valorDelMedio;
    //Compruebo todas las posibles igualdades
    if($arrayNumeros[0] > $arrayNumeros[1] && $arrayNumeros[0] < $arrayNumeros[2]){
        $valorDelMedio = $arrayNumeros[0];
    }elseif($arrayNumeros[0] > $arrayNumeros[1] && $arrayNumeros[0] > $arrayNumeros[2]){
        if($arrayNumeros[1] > $arrayNumeros[2]){
            $valorDelMedio = $arrayNumeros[1];
        }elseif($arrayNumeros[1] < $arrayNumeros[2]){
            $valorDelMedio = $arrayNumeros[2];
        }
    }elseif($arrayNumeros[0] < $arrayNumeros[1] && $arrayNumeros[0] < $arrayNumeros[2]){
        if($arrayNumeros[1] > $arrayNumeros[2]){
            $valorDelMedio = $arrayNumeros[2];
        }elseif($arrayNumeros[1] < $arrayNumeros[2]){
            $valorDelMedio = $arrayNumeros[1];
        }
    }elseif($arrayNumeros[0] < $arrayNumeros[1] && $arrayNumeros[0] > $arrayNumeros[2]){
        $valorDelMedio = $arrayNumeros[0];
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>El valor del medio es: <?php echo $valorDelMedio ?> </h1>
        <form name="formularioPalabra" action="index.php" method="POST">
            <br>
            <input type="submit" value="Confirmar" name="confirmar"/>
        </form>
    </body>
</html>

