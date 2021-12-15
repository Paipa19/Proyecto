<!DOCTYPE html>
<html lang="e">
    <head>
        <meta charset= "UTF-8">
        </meta>
        <title>  REGISTRO  </title>
        <link rel="stylesheet" type="text/css" href="registro.css">
    </head> 
    <body>

        <button  class="btonsalir" > <a href="Administrador.html">   INICIO  </a>   </button> 
        
        <section class="registros">
            <h3 align="center"> REGISTRATE </h3>
            <input  class = "control" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre"> <br>
            <input  class = "control" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido"> <br> 
            <input  class = "control" type="text" name="documento" id="documento" placeholder="Ingrese su Documento"> <br> 
            <input  class = "control" type="email" name="correo" id="correo" placeholder="Ingrese su Correo"> <br>
            <input  class = "control" type="text" name="telefono" id="telefono" placeholder="Ingrese su Telefono"> <br>
            <input class = "control" type="text" name="rol" id="rol" placeholder="Ingrese su Rol">  <br>
            <input  class = "control" type="password" name="contrasena" id="contrasena" placeholder="Contraseña"> <br>
            <input  class = "boton"   type="submit" value="Registar"  >     
            <input  class = "boton1"  type="submit" value="Limpiar" >  


        </section>


    </body>

    <link rel="stylesheet" type="text/css" href="registro.css">

    <table class="tabla">
        
        <thead>
            

            <tr>
                <h3 align="center">  Lista de Registrados </h3>
                <th>  Nombre  </th>
                <th>  Telefono  </th>
                <th>  Direccion  </th>
                <th>  Municipio  </th>
            </thead>
           
        
    
    
            </tr>
            <tr>

                <td>  <input size="text" type="text" class="" placeholder="" required> </td>
                <td>  <input size="text" type="text" class="" placeholder="" required> </td>
                <td>  <input size="text" type="text" class="" placeholder="" required> </td>
                <td>  <input size="text" type="text" class="" placeholder="" required> </td>

            </tr>
            
            <tr>

                <td>  <input size="text" type="text" class="" placeholder="" required> </td>
                <td>  <input size="text" type="text" class="" placeholder="" required> </td>
                <td>  <input size="text" type="text" class="" placeholder="" required> </td>
                <td>  <input size="text" type="text" class="" placeholder="" required> </td>
                
    

            </tr>
           

    </table>

      <section class="recliente" align="center"> 
            <input  class = "boton3"   type="submit" value="Modificar"  >     
            <input  class = "boton4"  type="submit" value="Buscar" >  
            <input  class = "boton5"  type="submit" value="Eliminar" >  
    
     </section>

</html>