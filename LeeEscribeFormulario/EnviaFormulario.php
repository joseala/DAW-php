<?php
if(!isset($_POST['enviar']))
{
    header('Location: http://localhost:8000');
}
$nombre=  htmlspecialchars($_POST['nombre']);
$contrasenia=  htmlspecialchars($_POST['contrasenia']);
$fecha=  htmlspecialchars($_POST['fecha']);
$tienda=  htmlspecialchars($_POST['tienda']);
$edad= htmlspecialchars($_POST['edad']);
$suscripcion= htmlspecialchars($_POST['suscripcion']);
?>
<!DOCTYPE html>
<html>
    <head>
       <title>Aplicacion</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>
           Nombre: <?php echo $nombre ?>
           <br>
           Contraseña: <?php echo $contrasenia ?>
           <br>
           Fecha de nacimiento: <?php echo $fecha ?>
           <br>
           Tienda: <?php echo $tienda ?>
           <br>
           Edad: <?php echo $edad ?>
           <br> 
           Suscripcion: <?php echo $suscripcion ?>
        </h1>    
    </body>
</html>


