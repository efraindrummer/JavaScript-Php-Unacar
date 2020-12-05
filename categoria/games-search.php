<?php 
    $host = 'localhost';
    $username = 'jsfinal';
    $password = 'qwerty';
    $db = 'gamestore';

    $connection = mysqli_connect($host,$username,$password,$db);

    $search = $_POST['search'];

    if(!empty($search)){
        $query = "SELECT * FROM gategoria WHERE nombre_categoriA LIKE '$search%'";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die('Query error'. mysqli_error($connection));
        }

        $json = array();

        while($row = mysqli_fetch_array($result)){
            
            $json[] = array(
                'nombre_categoria' => $row['nombre_categoria'],
            );
        }

        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
?>