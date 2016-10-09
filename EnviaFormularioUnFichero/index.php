<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_POST['enviar'])){

            $nombre=  htmlspecialchars($_POST['nombre']);
            $contrasenia=  htmlspecialchars($_POST['contrasenia']);
            $fecha=  htmlspecialchars($_POST['fecha']);
            $tienda=  htmlspecialchars($_POST['tienda']);
            $edad= htmlspecialchars($_POST['edad']);
            $suscripcion= htmlspecialchars($_POST['suscripcion']);
        ?>
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
        <?php
        }else{
        ?>        
        <form name="Formulario" action="index.php" method="POST">
            <br>
            <div>   
                <label for="nombre">Nombre: </label>
                <input id="nombre" type="text" use="required" name="nombre" size="30"> 
            </div>
            <br> <br>
            <div>   
                <label for="contrasenia">Contraseña: </label>
                <input id="contrasenia" type="password" use="required" name="contrasenia" size="10"> 
            </div> 
            <br> <br>
            <div>
                <label for="fecha" >Fecha de nacimiento: </label>
                <input id="fecha" type="date" required="required" name="fecha">
            </div>
            <br><br>
            <div>   
                <label for="tienda">Tienda: </label>
                <input id="tienda" type="text" use="required" name="tienda" size="20"> 
            </div>
            <br><br>
            <div>   
                <label for="Edad">Edad: </label>
                <input id="Edad" type="text" use="required" name="edad" size="3"> 
            </div>
            <br><br>
            <div>   
                <label for="Suscripcion">Suscripcion: </label>
                <input id="Suscripcion" type="text" use="required" name="suscripcion" size="10"> 
            </div> 
            <br>    
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <?php
        }
        ?>
    </body> 
</html>

    
