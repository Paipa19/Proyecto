<!DOCTYPE html>
<html lang="e">
    <head>
        <meta charset= "UTF-8">
        </meta>
        <title>  PRODUCTO  </title>
        <link rel="stylesheet" type="text/css" href="producto.css">
    </head> 
    <body>
        <button  class="btonsalir" > <a href="Administrador.html">   INICIO  </a>   </button> 


        <section class="registros">
            <h3 align="center"> POSTRES </h3>
            <input  class = "control" type="text" name="descripcion" id="descripcion" placeholder="Ingrese el sabor del postre"> <br>
            <input  class = "control" type="date" name="fecha" id="fecha" placeholder="Ingrese fecha de Vencimiento"> <br> 
            <input  class = "control" type="text" name="valor" id="valor" placeholder="Ingrese el Valor"> <br> 
            <input  class = "boton"   type="submit" value="Guardar"  >     
            <input  class = "boton1"  type="submit" value="Limpiar" >  


        </section>


    </body>

    <link rel="stylesheet" type="text/css" href="producto.css">


    <table class="tabla">
        
        <thead>
            

            <tr>
                <h3 align="center">  Lista de Postres </h3>
                <th>  Descripcion  </th>
                <th>  Fecha de Vencimiento  </th>
                <th>  Valor  </th>
            </thead>
           
        
    
    
            </tr>
            <tr>

                <td>  <input size="text" type="text" class="" placeholder="" required> </td>
                <td>  <input size="text" type="text" class="" placeholder="" required> </td>
                <td>  <input size="text" type="text" class="" placeholder="" required> </td>

            </tr>
            
            <tr>

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