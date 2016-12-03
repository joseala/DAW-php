<?php
if(!isset($_POST['enviar'])){
    header('Location: http://localhost:8000');
} 
$temperaturas=$_POST['temperaturas'];
//Cargo el valor del indice en ciudad y su valor an valorCiudad
foreach ($temperaturas as $ciudad => $valorCiudad) {
    //Cargo el valor del indice mes y su valor en valorMes.
    //foreach ($valorCiudad as $mes => $valorMes) {
        //Cargo el valor del indice en temperatura y valor en valor
//        foreach ($valorMes as $temperatura => $valor) {
//            if($temperatura=="tmin"){//si el valor del indice es tmin entro por aqui.    
//                $tMinima[]=(int)$temperaturas[$ciudad][$mes]['tmin'];//Introduzco los valores de tmin en el array tMinima.
//            }elseif($temperatura=="tmax"){//Si el valor del indice es tmax entro por aqui.
//                $tMaxima[]=(int)$temperaturas[$ciudad][$mes]['tmax'];//Introduzco los valores de tmin en el array tMinima. 
//            }
//        }
        $valorMaximo = max(array_column($valorCiudad,'tmax'));//Cargo el valor maximo.   
        $valorMinimo = min(array_column($valorCiudad,'tmin'));//Cargo el valor minimo.
    //}
    
    //unset($tMaxima,$tMinima);//vacia el contenido para la proxima ciudad.
    $valorMedio = (($valorMaximo-$valorMinimo)/2)+$valorMinimo;//Calculo la temperatura media.
    //Creo un array bidimensional para alojar las ciudades y sus temperaturas.
    $arrayValores[]=['Ciudad' => $ciudad,'Tmaxima'=>$valorMaximo,'Tmedia'=>$valorMedio,'Tminima'=>$valorMinimo];   

}
//asort($arrayValores);
//Guardo los valores de las columnas en arrays
foreach ($arrayValores as $fila => $columna){
    $ordenaTmax[$fila]=$columna['Tmaxima'];
    $ordenaTmedia[$fila]=$columna['Tmedia'];
    $ordenaTmin[$fila]=$columna['Tminima'];
}
//ordeno los arrays 
array_multisort($ordenaTmax, SORT_NUMERIC,$ordenaTmedia,SORT_NUMERIC,$ordenaTmin,SORT_NUMERIC, $arrayValores)
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Temperaturas</title>
    </head>
    <body>
        <?php
        echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Ciudad</th>";
            echo "<th>Tmax</th>";
            echo "<th>Tmedia</th>";
            echo "<th>Tmin</th>";
            echo "</tr>";
            foreach($arrayValores as $index => $posicion){
                echo "<tr>";
                foreach ($posicion as $key => $dato) {
                    echo "<td>$dato</td>";   
                }           
                echo "</tr>";
            }
            echo "</table>";
        ?>
        <br>
        <form name="Formulario2" action="index.php" method="POST">
            <input type="submit" value="Volver" name="volver">
        </form> 
    </body>
</html>

