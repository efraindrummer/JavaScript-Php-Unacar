<?php 
    require("conexion.php");

    $query = "SELECT * FROM vista_media_edad_clientes";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die('Consulta fallida' . mysqli_error($connection));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json[] = array(
            'AVG(edad)' => $row['AVG(edad)'],
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
?>