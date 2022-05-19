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
    <title>Politica de privacidad - La voz de los mayores</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/estilo_politicaDePrivacidad.css">
    <link rel="shortcut icon" href="../img/logo1.png">
</head>

<body>
    <header class="header">
        <div class="container logo-nav-container">
            <h2><img src="../img/logo1.png" alt=""> POLÍTICA DE PRIVACIDAD</h2>
            <nav class="navigation">
                <ul>
                    <li><a href="../indexU.php">Atras</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <h1>Cómo ejercer tus derechos con La voz de los mayores</h1>
            <p>Acceso: Para solicitar una copia de tus datos personales a La voz de los mayores, visita la
                Configuración de privacidad de tu cuenta. Desde allí podrás descargar automáticamente gran
                parte de tus datos personales e informarte de cómo solicitar más información.</p>

            <p>Rectificación: Puedes editar tus datos de usuario en "Editar perfil" en tu cuenta.</p>

            <p>Cancelación: Puedes eliminar el contenido de audio de tu perfil seleccionando el contenido
                correspondiente
                y eligiendo la opción correspondiente. Por ejemplo, puedes eliminar listas de reproducción
                de tu perfil, o eliminar una canción de tu lista de reproducción.</p>

        </div>
    </main>

</body>

</html>