<?php 

    $host = 'localhost';
    $username = 'jsfinal';
    $password = 'qwerty';
    $db = 'gamestore';

    $connection = mysqli_connect($host,$username,$password,$db);

    if(isset($_POST['nombre_juego'])){
        $nombre_juego = $_POST['nombre_juego'];
        $descripcion_juego = $_POST['descripcion_juego'];
        $fecha_lanzamiento = $_POST['fecha_lanzamiento'];
        $precio = $_POST['precio'];
        $GATEGORIA_id_categoria = $_POST['GATEGORIA_id_categoria'];


        $query = "INSERT INTO juegos(nombre_juego, descripcion_juego, fecha_lanzamiento, precio, GATEGORIA_id_categoria) VALUES ('$nombre_juego','$descripcion_juego','$fecha_lanzamiento','$precio','$GATEGORIA_id_categoria')";
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