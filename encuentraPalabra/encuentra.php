<?php
if(!isset($_POST['confirmar'])){
    header('Location: http://localhost:8000');
}

$texto=$_POST['texto'];
$palabras=  preg_split("/[\s,\t;\n:.]+/", $texto);//Separa texto
$vocales=0;
$listado=[];
function mayuscula($palabra){
    return ctype_upper(substr($palabra,0,1));
}
function entre8y10($palabra){
    return (strlen($palabra)>=8 && strlen($palabra)<=10); 
}
function cuatroVocales($palabra){
    $vocales=0;
    $arrayPalabra=str_split($palabra);//Convierte string a array
    foreach ($arrayPalabra as $letra) 
    {
        if (preg_match('/[aeiouáéíóúü]/i',$letra))//Compara letra con [aeiouáéíóúü],con i ignoma mayusculas y minusculas
        {
            $vocales++;
        } 				
    }
    
    return $vocales==4 ;
}
function acabaEro($palabra){
    $posicion=strpos($palabra, 'ero');
    return $posicion && ($posicion === (strlen($palabra)-3));
}
function cmp($a, $b)
{
    if (strlen($a) == strlen($b)) {
        return 0;
    }
    return (strlen($a) > strlen($b)) ? -1 : 1;
}

foreach($palabras as $valor){
   
    if(mayuscula($valor)){//Coje la primera letra del string con substr() y comprueba si es mayuscula con ctype_upper().       
        if(entre8y10($valor)){//Comprueba el tamaño del string con strlen().
            if(cuatroVocales($valor)){//Compruba si palabra tiene 4 vocales 
                if(acabaEro($valor)){//Comprueba si la palabra acaba en 'ero'
                    $listado[]=  strtoupper($valor);
                }
            }
        }
    }   
}
$repetidos=  array_count_values($listado);
$listaSinRepetidos=array_unique($listado);//Elimina palabras repetidas
sort($listaSinRepetidos,SORT_NATURAL);//Ordena alfaveticamente por valor de menor a mayor
usort($listaSinRepetidos, "cmp");//ordena array por tamaño de string
$listadoMostrar= implode ("-", $listaSinRepetidos);
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <br>
            <?php echo $listadoMostrar;?>
        <br>
            <?php foreach($repetidos as $index => $value){
                if($value > 1){                   
                    echo $index;?>
                    <h3> se repite </h3>
                    <?php echo $value;
                }                   
            }?>
        <form name="formularioPalabra" action="index.php" method="POST">           
            <input type="submit" value="Volver" name="volver"/>
        </form>
    </body>
</html>

