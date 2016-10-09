<?php
if(!isset($_POST['enviar'])){
    header('Location: http://localhost:8000');
}
$rango= $_POST['rango'];
$array=  explode(',', $rango);//Quito las comas y meto en un array
foreach ($array as $index => $value)
{
    if(!is_numeric($value))//localizo posicion con '-'
    {
        $posicion=str_split($value);//convierto string en array
        $numeros=range($posicion[0],$posicion[2]);//Creo array de rango de numeros
        $i=0;
        foreach ($numeros as $index2 => $value2) {
          $array[$index+$i]=$value2;
          $i++;
        }
    }
}
$noRepetido=array_unique($array);
?> 
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabla de multiplicar</title>
        <style type="text/css">
            .bg1 { background-color:#BDC3C7;}
            .bg2 { background-color:#FFFFFF;}
        </style>
    </head>
    <body>        
        <?php              
        foreach ($noRepetido as $value) {//Recorre array hasta el final.?>       
            <br>
            <?php for($multiplicador=1;$multiplicador<=9;$multiplicador++){//Incrementa multiplicador y para en 9.?>
            <table border="1">
                <tr >
                    <td class=bg1><?php echo $value ?></td> 
                    <td class=bg2>X</td>
                    <td class=bg1><?php echo $multiplicador ?></td>
                    <td class=bg2>=</td>           
                    <td class=bg1><?php echo $resultado=$value*$multiplicador  ?></td>
                </tr> 
            </table>
            <?php }?>
        <?php }?>                                                                                          
    </body>
</html>


