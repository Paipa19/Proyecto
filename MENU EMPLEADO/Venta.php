<!DOCTYPE html>
<html lang="e">
    <head>
        <meta charset= "UTF-8">
        </meta>
        <title>  Numero de Venta  </title>
        <link rel="stylesheet" type="text/css" href="cliente.CSS">
    </head> 
    <body>

        <button  class="btonsalir" > <a href="Empleado menu.html">   INICIO  </a>   </button> 


        <section class="registros">
            <h3 align="center"> Numero de Venta </h3>
            <input  class = "control" type="text" name="venta" id="venta" placeholder="Ingrese Numero Venta"> <br>
            <input  class = "control" type="text" name="total" id="total" placeholder="Ingrese Total"> <br> 
            <input  class = "control" type="date" name="fecha" id="fecha" placeholder="Ingrese Fecha"> <br>
            <input  class = "control" type="text" name="cantidad" id="cantidad" placeholder="Ingrese Cantidad de Postres"> <br> 
            <input  class = "control" type="text" name="sabor" id="sabor" placeholder="Ingrese Sabor de Postre"> <br> 
            <input  class = "boton"   type="submit" value="Guardar"  >     
            <input  class = "boton1"  type="submit" value="Limpiar" >  


        </section>


    </body>

    <link rel="stylesheet" type="text/css" href="cliente.CSS">


    <table class="tabla">
        
        <thead>
            

            <tr>
                <h3 align="center">  Lista Ventas </h3>
                <th>  Numero Venta  </th>
                <th>  Total  </th>
                <th>  Fecha  </th>
                <th>  Cantidad  </th>
                <th>  Sabor  </th>
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
