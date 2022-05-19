<?php

    include('../include/conexion.php');

    $query = "select ID_M,NOMBRE_M,AUTOR_M,CATEGORIA_M from MUSICA";
    $result =mysqli_query($connection, $query);

    if(!$result){
        die('Consulta Fallida'. mysqli_error($connection));
    }

    $json = array();
    while($row=mysqli_fetch_array($result)){
        $json[] = array(
            'ID_M' => $row['ID_M'],
            'NOMBRE_M' => $row['NOMBRE_M'],
            'AUTOR_M' => $row['AUTOR_M'],
            'CATEGORIA_M' => $row['CATEGORIA_M']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;

?>