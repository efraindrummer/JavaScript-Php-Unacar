<?php 
    $host = 'localhost';
    $username = 'jsfinal';
    $password = 'qwerty';
    $db = 'gamestore';

    $connection = mysqli_connect($host,$username,$password,$db);

    $query = "SELECT * FROM clientes";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Consulta fallida' . mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'nombre_cliente' => $row['nombre_cliente'],
            'apellido_cliente' => $row['apellido_cliente'],
            'edad' => $row['edad'],
            'fecha_registro' => $row['fecha_registro']
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
?>