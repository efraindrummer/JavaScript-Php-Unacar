<?php 

    $host = 'localhost';
    $username = 'jsfinal';
    $password = 'qwerty';
    $db = 'gamestore';

    $connection = mysqli_connect($host,$username,$password,$db);

    if(isset($_POST['nombre_cliente'])){
        $nombre_cliente = $_POST['nombre_cliente'];
        $apellido_cliente = $_POST['apellido_cliente'];
        $edad = $_POST['edad'];
        $fecha = $_POST['fecha_registro'];

        $query = "INSERT INTO juegos(nombre_cliente, apellido_cliente, edad, fecha_registro) VALUES ('$nombre_cliente','$apellido_cliente','$edad','$fecha')";
        $result = mysqli_query($connection, $query);
        if(!$result){
            die('La consulta ha fallado.');
        }
        echo "
            <script>
                alert('Insertado Correctamente');
            </script>";
    }
?>