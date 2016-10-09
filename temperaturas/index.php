<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>         
        <?php 
        $ciudades=['Madrid','Barcelona','Sevilla','Bilbao'];
        $meses=['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
        foreach ( $ciudades as $ciudad) {
            echo "<table border='1'width='10'>";
            echo "<form id='Formulario' action='temperatura.php' method='POST' >";
            echo "<tr>";
            echo "<td>$ciudad</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Mes</th>";
            echo "<th>Tmax</th>";
            echo "<th>tmin</th>";
            echo "</tr>";
            foreach ($meses as $mes) {
                echo "<tr>";
                echo "<td>$mes</td>";
                //for($x=1;$x<=12;$x++){
                    //$tmin = rand(-4,10);
                    //$tmax = rand(23,37);
                echo "<td><input type='number' id='numeros' name=temperaturas[$ciudad][$mes][tmax]/></td>";
                echo "<td><input type='number' id='numeros' name=temperaturas[$ciudad][$mes][tmin]/></td>";
                echo "</tr>";
                //}
            }
            echo "</table><br>";         
        }  
        echo "<input type='submit' value='Enviar' name='enviar'/>";
        echo "</form>";           
        ?>       
    </body>
</html>
