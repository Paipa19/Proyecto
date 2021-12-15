<!DOCTYPE html>
<html lang="e">
    <head>
        <meta charset= "UTF-8">
        </meta>
        <title>  PAGO  </title>
        <link rel="stylesheet" type="text/css" href="pago.css">
    </head> 
    <body>

        <button  class="btonsalir" > <a href="Empleado menu.html">   INICIO  </a>   </button> 
        
        <section class="registros">
            <h3 align="center"> PAGO </h3>
            <input  class = "control" type="text" name="abono" id="abono" placeholder="Ingrese el valor del abono"> <br>
            <input  class = "control" type="text" name="saldo" id="saldo" placeholder="Ingrese el valor del saldo"> <br> 
            <input  class = "control" type="date" name="pago" id="pago" placeholder="Ingrese la fecha de pago"> <br> 
            <input  class = "boton"   type="submit" value="Guardar"  >     
            <input  class = "boton1"  type="submit" value="Limpiar" >  


        </section>


    </body>

    <link rel="stylesheet" type="text/css" href="pago.css">


    <table class="tabla">
        
        <thead>
            

            <tr>
                <h3 align="center">  Lista de Pagos </h3>
                <th>  Abono  </th>
                <th>  Saldo  </th>
                <th>  Fecha de Pago  </th>
                <th>  Descuento  </th>
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