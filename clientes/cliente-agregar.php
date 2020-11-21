<?php 
    include("conexion/conexion.php");

    if(isset( $_POST['nombre'])){
        echo $_POST['nombre'];
    }
?>