<?php
if(!isset($_POST['enviar'])){
    header('Location: http://localhost:8000');
}
$numero= $_POST['numero'];
function comprobarNumero($numero){
    
    return (is_numeric($numero)) && ($numero<=9 && $numero>0);
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabla de multiplicar</title>
    </head>
    <body>
        <?php
        if(!comprobarNumero($numero)){//Comprueba si es un valor numerico y si esta entre rango?>
            <h1>Intoduce un valor numerico entre 1 y 9</h1>
            <form name="Formulario" action="index.php" method="POST"><!--Para repetir formulario-->   
                <input type="submit" value="Volver" name="volver">  
            </form>
        <?php 
        }else{//Si esta en el rango imprime?>
            <h1>Tabla del <?php echo $numero?></h1>
            <table border="1">
           <?php for($multiplicador=1;$multiplicador<=9;$multiplicador++){//Incrementa multiplicador has llegar a 9?>
                <tr >
                    <td><?php echo $numero ?></td> 
                    <td><?php echo 'X' ?></td>
                    <td><?php echo $multiplicador ?></td>
                    <td><?php echo '=' ?></td>
                    <?php $resultado=$numero*$multiplicador ?>            
                    <td><?php echo $resultado ?></td>
                </tr>
           <?php } ?>
            </table>
        <?php }?>      
    </body>
</html>

