<?php 
    require("conexion.php");

    $query = "SELECT count(*) as total_clientes FROM clientes";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Consulta fallida' . mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'total_clientes' => $row['total_clientes'],
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
?>