<?php 
    include("./conexion/conexion.php");

    $search = $_POST['search'];

    if(!empty($search)){
        $query = "SELECT * FROM clientes WHERE nombre_cliente LIKE '$search%'";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Query error'. mysqli_error($connection));
        }

        $json = array();

        while($row = mysqli_fetch_array($result)){
            
            $json[] = array(
                'nombre_cliente' => $row['nombre_cliente'],
                'apellidos' => $row['apellidos'],
                'id_cliente' => $row['id_cliente']
            );
        }

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
?>