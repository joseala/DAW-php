<?php
if(isset($_POST['empezar'])){
    header('Location: http://localhost:8000');
} 
$temperaturas=$_POST['temperaturas'];
foreach ($temperaturas as $indexCiudad => $value) {
        $ciudades[$indexCiudad]=$indexCiudad;
        }
        foreach ($temperaturas as $ciudad => $valorCiudad) {
            foreach ($valorCiudad as $mes => $valorMes) {
                foreach ($valorMes as $temperatura => $valor) {
                    if($temperatura=="tmin"){    
                        $tMinima[]=(int)$temperaturas[$ciudad][$mes]['tmin']; 
                    }elseif($temperatura=="tmax"){
                        $tMaxima[]=(int)$temperaturas[$ciudad][$mes]['tmax']; 
                    }
                }
            }
            $valorMaximo =  max($tMaxima);   
            $valorMinimo = min($tMinima);
            unset($tMaxima,$tMinima);
            $valorMedio = (($valorMaximo-$valorMinimo)/2)+$valorMinimo;
            $arrayValores[]=['Ciudad' => $ciudad,'Tmaxima'=>$valorMaximo,'Tmedia'=>$valorMedio,'Tminima'=>$valorMinimo];   
           
        }
        //asort($arrayValores);
        foreach ($arrayValores as $fila => $columna){
            $ordenaTmax[$fila]=$columna['Tmaxima'];
            $ordenaTmedia[$fila]=$columna['Tmedia'];
            $ordenaTmin[$fila]=$columna['Tminima'];
        }
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
            foreach($arrayValores as $city => $posicion){
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

