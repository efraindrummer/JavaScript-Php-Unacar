<?php 
    $host = 'localhost';
    $username = 'jsfinal';
    $password = 'qwerty';
    $db = 'gamestore';

    $connection = mysqli_connect($host,$username,$password,$db);

    $query = "SELECT * FROM gategoria";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Consulta fallida' . mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'id_categoria' => $row['id_categoria'],
            'nombre_categoria' => $row['nombre_categoria']
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
?>