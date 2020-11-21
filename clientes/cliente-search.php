<?php 
    $host = 'localhost';
    $username = 'jsfinal';
    $password = 'qwerty';
    $db = 'gamestore';

    $connection = mysqli_connect($host,$username,$password,$db);

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
                'apellido_cliente' => $row['apellido_cliente'],
                'id_cliente' => $row['id_cliente']
            );
        }

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
?>