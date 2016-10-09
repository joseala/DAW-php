<?php
if(!isset($_POST['botonenvio'])){
  
    header('Location: http://localhost:8000');    
}

$divisa=$_POST['divisa'];
$monedaOrigen=$divisa['monedaOrigen'];
$cantidadOrigen=$divisa['cantidadOrigen'];
$monedaDestino=$divisa['monedaDestino'];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Conversor de divisas</title>
    </head>
    <body>
        <h1>Conversor de divisas</h1>
        <?php 
        //Tomamos como referencia el euro
        $euro=1;
        $dolar=1.122;
        $libra=0.865;
        $yuan=7.485;
        $cambio;
        $moneda;
        switch ($monedaOrigen) {//Depende de la moneda origen entra por un case
            case "Euro":
                switch ($monedaDestino) { //Depende de la moneda destino entra por un case                 
                    case "Dolar":
                        $cambio=$cantidadOrigen*$dolar;                       
                        break;
                    case "Libra":
                        $cambio=$cantidadOrigen*$libra;
                        break;
                    case "Yuan":
                        $cambio=$cantidadOrigen*$yuan;
                        break;
                    default:
                        $cambio=$cantidadOrigen;
                        break;
                }
                break;
            case "Dolar":
                switch ($monedaDestino) {                  
                    case "Euro":
                        $cambio=(1/$dolar)*$cantidadOrigen;
                        break;
                    case "Libra":
                        $cambio=((1/$dolar)*$libra)*$cantidadOrigen;
                        break;
                    case "Yuan":
                        $cambio=((1/$dolar)*$yuan)*$cantidadOrigen;
                        break;
                    default:
                        $cambio=$cantidadOrigen;
                        break;
                }

                break;
            case "Libra":
                switch ($monedaDestino) {                  
                    case "Dolar":
                        $cambio=((1/$libra)*$dolar)*$cantidadOrigen;
                        break;
                    case "Euro":
                        $cambio=(1/$libra)*$cantidadOrigen;
                        break;
                    case "Yuan":
                        $cambio=((1/$libra)*$yuan)*$cantidadOrigen;
                        break;
                    default:
                        $cambio=$cantidadOrigen;
                        break;
                }

                break;
            case "Yuan":
                switch ($monedaDestino) {                  
                    case "Dolar":
                        $cambio=((1/$yuan)*$dolar)*$cantidadOrigen;
                        break;
                    case "Libra":
                        $cambio=((1/$yuan)*$libra)*$cantidadOrigen;
                        break;
                    case "Euro":
                        $cambio=(1/$yuan)*$cantidadOrigen;
                        $moneda="Euros";

                        break;
                    default:
                        $cambio=$cantidadOrigen;
                        break;
                }

                break;
            default:
                $cambio=$cantidadOrigen;
                break;
        }?>

        <div>
            Moneda Origen : <?php echo $monedaOrigen ?>
            <br>
            Cantidad : <?php echo $cantidadOrigen ?>
            <br>
            Moneda Destino : <?php echo $monedaDestino ?>
            <br>
            Cambio : <?php echo $cambio ?>
        </div>
        <br>
        <form name="botonVolver" action="index.php" method="POST">
            <input type="submit" value="Volver al conversor" name="volver"/>
        </form>
    </body>
</html>