<?php
    include ("cn.php");

    $id=$_REQUEST["id"];
    $nombre=$_REQUEST["nombre"];
    $apellido=$_REQUEST["apellido"];
    $fecha=$_REQUEST["fecha"];
    $correo=$_REQUEST["email"];

    //actualizamos tabla
    $actualizar="UPDATE estudiante SET nombre='$nombre',apellido='$apellido',fechanaci='$fecha',email='$correo' WHERE id_estudiante='$id'";
    $resultado=mysqli_query($mysqli,$actualizar);
    header("location: index.php");
?>