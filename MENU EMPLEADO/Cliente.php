<!DOCTYPE html>
<html lang="e">
    <head>
        <meta charset= "UTF-8">
        </meta>
        <title>  Cliente </title>
        <link rel="stylesheet" type="text/css" href="cliente.CSS">
    </head> 
    <body>

        
        <button  class="btonsalir" > <a href="Empleado menu.html">   INICIO  </a>   </button> 

        <section class="registros">
            <h3 align="center"> Cliente </h3>
            <input  class = "control" type="text" name="nombre" id="nombre" placeholder="Ingrese Nombre"> <br>
            <input  class = "control" type="text" name="apellido" id="apellido" placeholder="Ingrese Apellido"> <br> 
            <input  class = "control" type="text" name="documento" id="documento" placeholder="Ingrese Documento"> <br>
            <input  class = "control" type="text" name="telefono" id="telefono" placeholder="Ingrese Telefono"> <br> 
            <input  class = "control" type="email" name="correo" id="correo" placeholder="Ingrese Correo"> <br> 
            <input  class = "boton"   type="submit" value="Guardar"  >     
            <input  class = "boton1"  type="submit" value="Limpiar" >  


        </section>


    </body>

    <link rel="stylesheet" type="text/css" href="cliente.CSS">


    <table class="tabla">
        
        <thead>
            

            <tr>
                <h3 align="center">  Lista Clientes </h3>
                <th>  Nombre  </th>
                <th>  Apellido  </th>
                <th>  Documento  </th>
                <th>  Telefono  </th>
                <th>  Correo  </th>
            </thead>
           
        
    
    
            </tr>
            <tr>

                <td>  <input size="text" type="text" class="" placeholder="" required> </td>
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
                <td>  <input size="text" type="text" class="" placeholder="" required> </td>
               
            </tr>



    </table>

    <section class="recliente" align="center"> 
            <input  class = "boton3"   type="submit" value="Modificar"  >     
            <input  class = "boton4"  type="submit" value="Buscar" >  
            <input  class = "boton5"  type="submit" value="Eliminar" >  
    
     </section>
    
</html>