<!DOCTYPE html>
<html>

<head>
    <title>CAFETERIA</title>
        <meta charset="UTF-8" />
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
                    <a href="">Registrar</a>
                <!--Modulo de unlogin, Permite mostrar el usuario si se esta logeado  -->
                <?php include "moduleunlogin.php"; ?>
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


            <form action="" method="post" class="registro" > 
                <div><label>Usuario:</label> 
                <input type="text" name="usuario"></div> 
                <div><label>Clave:</label> 
                <input type="password" name="password"></div> 
                <div><label>Repetir Clave:</label> 
                <input type="password" name="repassword"></div> 
                <div> 
                <input type="submit" name="enviar" value="Registrar"></div> 
            </form> 
             
            
            <?php

            include_once "mantenedor.php"; 

            if(isset($_POST['enviar'])) 
            { 
                if($_POST['usuario'] == '' or $_POST['password'] == '' or $_POST['repassword'] == '') 
                { 
                    echo 'Por favor llene todos los campos.'; 
                } 
                else 
                {
                    if($_POST['password'] == $_POST['repassword']) 
                    { 
                        $usuario = $_POST['usuario']; 
                        $password = $_POST['password']; 
                        // $sql = "INSERT INTO usuarios (usuario,password) VALUES ('$usuario','$password')"; 
                        // mysql_query($sql); 

                        if (creausuario($usuario,$password)){
                            echo 'Usted se ha registrado correctamente.'; 
                        } else {
                            echo "Puede que el usuario ya exista, Intentelo nuevamente";
                        }
          
                    } 
                    else 
                    { 
                        echo 'Las claves no son iguales, intente nuevamente.'; 

                    }
                } 
            } 
            ?> 

</body>
</html>