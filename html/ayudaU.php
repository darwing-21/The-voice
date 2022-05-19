<?php 
    //variable de sesion
    session_start();
    include '../include/conexion.php';
    //variable de sesion
    $usuario = $_SESSION['NOMBRE_U'];
    if(!isset($usuario)){
        header("location: ../index.php");
    }
    $query = "SELECT * FROM USUARIOS WHERE NOMBRE_U = '$usuario'";
    $ejecuta= $connection->query($query);
    $row = $ejecuta ->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ayuda - La voz de los mayores</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="../img/logo1.png">
        <link href="../css/estilo_ayuda.css" rel="stylesheet">

    </head>
    <body>
        <header class="header">
            <div class="container logo-nav-container">
                <h2><img src="../img/logo1.png" alt=""> AYUDA</h2>
                <nav class="navigation">
                    <ul>
                        <li><a class="pagprinc" href="../indexU.php">Atras</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="main">
            <div class="container">
                <h1>Problemas al escuchar música en el navegador web
                    Comprueba si se trata de un problema de conexión</h1>
                    
                <p>Si el reproductor web de La voz de los mayores dice que no tienes conexión a internet, 
                    prueba esto:</p>
                
                <h1>Reinicia tu navegador</h1>
                <p>La solución más sencilla primero: salir de la aplicación de tu navegador y reiniciarla. 
                    Después, vuelve a entrar en La voz de los mayores.</p>
                
                <h1>Busca actualizaciones</h1>
                <p>A veces el navegador y Flash Player están desactualizados. Prueba a actualizarlos y ver 
                    si cambia.</p>
                
                <h1>Borra el caché</h1>
                <p>Prueba a borrar el caché de tu navegador (si no estás seguro de cómo se hace busca "cómo 
                    limpiar mi caché").</p>

                <h1>Reduce el número de pestañas abiertas</h1>
                <p>¿Cuántas pestañas tienes abiertas en el navegador? Dependiendo de la potencia de tu 
                    ordenador, a veces tener muchas pestañas abiertas puede afectar al funcionamiento de 
                    La voz de los mayores.</p>

            </div>
        </main>

    </body>
</html>