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
        //Si no esta pulsado el boton introduccir entra por aqui y pide introducir ciudades.
        if(!isset($_POST['introduccir'])){
            echo "<form id='formulario' action='' method='POST'> ";
            echo "<label for='introduceTexto'>Intoduce Ciudades </label>"; 
            echo "<input id='introduceTexto' type='text' name='ciudades'/>";
            echo "<input id='introduceTexto' type='submit'  name='introduccir'/>";
            echo "</form>";
            
        }else{
        //$ciudades=['Madrid','Barcelona','Sevilla','Bilbao'];
        //Recibe la cadena con las ciudades a mostrar
        $cadenaCiudad=$_POST['ciudades'];
        $ciudades=  explode(",", $cadenaCiudad);
        //Recorro el array ciudades que seran los paneles del array multidimensional
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
            echo "<th>Tmin</th>";
            echo "</tr>";
            //Recorro el array meses que seran las filas del array multidimensional
            foreach ($meses as $mes) {
                $aleatorioMax=rand(10,35);
                $aleatorioMin=rand(-6,9);
                echo "<tr>";
                echo "<td>$mes</td>";
                //Creo los contenedores para introducir los valores de tmax y tmin,que seran las columnas.
                echo "<td><input type='number' value='$aleatorioMax' name='temperaturas[$ciudad][$mes][tmax]'/></td>";
                echo "<td><input type='number' value='$aleatorioMin' name='temperaturas[$ciudad][$mes][tmin]'/></td>";
                echo "</tr>";              
            }
            echo "</table><br>";         
        }  
        echo "<input type='submit' value='Enviar' name='enviar'/>";
        echo "</form>"; 
        }
        ?>       
    </body>
</html>
