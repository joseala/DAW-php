<?php
if(!isset($_POST['confirmar'])){
    header('Location: http://localhost:8000');
}

$fecha=$_POST['fecha'];

$arrayFecha = explode('-', $fecha);
$dia = $arrayFecha[0];
$mes = $arrayFecha[1];
$anio = $arrayFecha[2];
$valida = checkdate($mes, $dia, $anio);//Funcion para validar fecha

/*switch ($mes){
    
    case 01:
    case 03:
    case 05:
    case 07:
    case 08:
    case 10:
    case 12:
        if($dia <=31 && $dia >=1){
            $valida = true; 
        }else{
            $valida = false; 
        }       
        break;
    case 04:
    case 06:
    case 09:
    case 11:
        if($dia <=30 && $dia >=1){
           $valida = true;  
        }else{
            $valida = false; 
        } 
        break;
    case 02:
        if($dia <=29 && $dia >=1){
            if($dia==29){
                if($anio%4==0 || $anio%400==0 && !$anio%100==0){//Un año es bisiesto si es divisible entre 4, excepto aquellos divisibles entre 100 pero no entre 400.
                   $valida = true; 
                }else{
                   $valida = false; 
                }                   
            }else{
                if($anio%4==0 || $anio%400==0 && !$anio%100==0){//Un año es bisiesto si es divisible entre 4, excepto aquellos divisibles entre 100 pero no entre 400.
                   $valida = false; 
                }else{
                   $valida = true; 
                }                                  
            } 
        }else{
            $valida = false; 
        } 
        
        break;
    default:
        $valida = false;
        break;                            
}*/

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comprobar Fecha</title>
    </head>
    <body>
        <?php 
         if($valida){
            echo"<p>La fecha $dia-$mes-$anio es correcta</p>";
         }else{
             echo"<p>La fecha $dia-$mes-$anio no es correcta</p>";
         }
             
        ?>
        <form name = "FormularioFrcha" action="index.php" method="POST">
            <input type="submit" value="Volver" name="volver"/>
        </form>
    </body>
</html>

