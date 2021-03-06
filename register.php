<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario - La voz de los mayores</title>
    <link rel="stylesheet" href="css/estilo_registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="shortcut icon" href="img/logo1.png">
</head>
<body>
    <div class="general">
        <div class="container-superior">
            <a href="index.php"><img class="logo" src="img/logo1.png"></a>
            <h1 class="title">La Voz de los mayores</h1>
            <div class="registro-inicio">
                <a href="index.php" class="atras">Atrás</a>
            </div>
        </div>                               
        <div class="container_medio">           
            
                <div class="form">
                    <form action="register_usuario.php" method="post">
                        <div class="titulo">
                            <h2 class="registrarse">Registrarse</h2>
                        </div><br>
                        <!--NOMBRE-->
                        <div class="block">
                            <label for="name" class="name">Nombre de usuario</label><br>
                            <input type="text" id="name" class="lol" name="nombre"  minlength="4" maxlength="50"
                             autocomplete="off"  pattern="^([a-zA-z]){4,50}$"
                              required onkeyup="this.value=this.value.replace(/^\s+/,'');">
                            <span class="icon-left"><i class="zmdi zmdi-check"></i></span>
                            <span class="msj"></span>
                        </div>
                        <!--CORREO-->
                        <div class="block">
                            <label for="correo" class="correo">Correo</label><br>
                            <input type="email" id="correo"  class="lol" name="correo" maxlength="100" 
                             autocomplete="off" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]*$" required>
                             <span class="icon-left"><i class="zmdi zmdi-check"></i></span>
                            <span class="msj"></span>
                        </div>
                        <!--CONTRASEÑA-->
                         <div class="block">
                            <label for="contraseña">Contraseña</label><br>
                            <input type="password" name="contrasena" id="contraseña"  class="lol" maxlength="20" 
                            minlength="8" required pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$">
                            <span class="icon-left"><i class="zmdi zmdi-check"></i></span>
                            <span class="msj"></span>
                        </div>
                        <!--CONFIRMAR CONTRASEÑA-->
                        <div class="block">
                            <label for="con_contra">Confirmar contraseña</label><br>
                            <input type="password" name="contrasena2" value="" id="con_contra"  class="lol" maxlength="20" minlength="8" 
                            required pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$">
                            <span class="icon-left"><i class="zmdi zmdi-check"></i></span>
                            <span class="msj"></span>
                        </div> 
                        <!--BOTONES CONFIRMAR Y ACEPTAR-->                 
                        <div class="botones">
                            <a href="index2.html"><button class="confirmar" type="submit" id="confirmar" name="confirmar">Confirmar</button></a>
                            <button class="cancelar" type="reset">Cancelar</button>
                        </div>
                    </form>
                </div>
            
           
        </div>
    </div>
 
    <footer>
        <div class="container-inferior">
    
        </div>    
    </footer>
</body>
</html>