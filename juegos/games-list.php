<?php 
    $host = 'localhost';
    $username = 'jsfinal';
    $password = 'qwerty';
    $db = 'gamestore';

    $connection = mysqli_connect($host,$username,$password,$db);

    $query = "SELECT * FROM juegos";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Consulta fallida' . mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id_juego' => $row['id_juego'],
            'nombre_juego' => $row['nombre_juego'],
            'descripcion_juego' => $row['descripcion_juego'],
            'fecha_lanzamiento' => $row['fecha_lanzamiento'],
            'precio' => $row['precio']
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
?>