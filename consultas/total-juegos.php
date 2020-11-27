<?php 
    require("conexion.php");

    $query = "SELECT count(*) as total_juegos FROM juegos";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Consulta fallida' . mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'total_juegos' => $row['total_juegos'],
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
?>