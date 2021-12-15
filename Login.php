<!DOCTYPE html>
<html lang="e">
    <head>
        <meta charset= "UTF-8">
        </meta>
        <title> LOGIN </title>
        <link rel="stylesheet" type="text/css" href="Login.css">
        <link rel="stylesheet" href="text/php" href="conexion.php">
    </head> 


    <body>



    <form action="conexion.php" method="post"> 
        <section class="registros">
            <h3 align="center"> Login </h3>
            
         <select class = "select">
         <option selected>SELECCIONAR ROL</option>
	  <option>Administrador</option>
          <option>Empleado</option>
            

         </select>

            
            <input  class = "control" type="text" name="nombre" id="nombre" placeholder="Ingrese Nombre"> <br> 
            <input  class = "control" type="password" name="contraseña" id="contraseña" placeholder="Ingrese Contraseña"> <br>
            <input  class = "boton"   type="submit" value="Ingresar"  >     
            <input  class = "boton1"  type="submit" value="Registrarse" >  


        </section>

    </form>


    </body>
</html>