<!DOCTYPE html>
<html>

<head>
    <title>CAFETERIA</title>
        <meta charset="UTF-8" />
        <link rel="shortcut icon" href="coffee.ico" />
        <link rel="shortcut icon" href="image/now.ico" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Elastic Image Slideshow with Thumbnail Preview" />
        <meta name="keywords" content="jquery, css3, responsive, image, slider, slideshow, thumbnails, preview, elastic" />
        <meta name="author" content="Codrops" />

        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
        <noscript>
        <link rel="stylesheet" type="text/css" href="css/noscript.css" />
        </noscript>
</head>

<body>

           <div class="container">
            <div class="header">
              
                <span class="right">
                    <a href="login.php">Ingresar</a>
                    <a href="registrar.php">Registrar</a>
                </span>
                <div class="clr"></div>
            </div>
           
      
        </div>


        <div id="menu">
            <ul id="men">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="eventos.php">Eventos</a></li>
                <li><a href="contacto.php">Contacto</a></li>
             
            </ul>

        </div>



        <div class="tablita" >
                <table >
                    <tr>
                        <td>
                            Producto
                        </td>
                        <td >
                            Cantidad
                        </td>
                        <td>
                            Precio Unit.
                        </td>
                    </tr>
                         <?php 
                        
                                include "mantenedor.php";
                                $result = buscaarticulos();

                                # print_r($result);

                                foreach ($result as $key => $value) {
                                    echo "
                    <tr>
                        <td >
                            ".$value["nombre"]."
                        </td>
                        <td>
                            ".$value["cantidad"]."
                        </td>
                        <td>
                            ".$value["precio"]."
                        </td>
                    </tr>";
                                }
                          ?>
                </table>
            </div>

            <div>
          
                    <form action="insertar.php" method="post" name="form"> 
                    <div><label>Nombre:</label> 
                    <input type="text" name="nombre"></div> 
                    <div><label>Cantidad:</label> 
                    <input type="password" name="cantidad"></div> 
                    <div><label>Precio:</label> 
                    <input type="text" name="precio"></div> 
                    <div> 
                    <input type="submit" name="enviar" value="insertar datos"></div> 
                    
                    </form>              

            </div>
            
</body>
</html>