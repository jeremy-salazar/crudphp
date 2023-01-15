<?php
    include ("cn.php");
    $id=$_REQUEST["id_estudiante"];
    $alumno="DELETE from estudiante where id_estudiante='$id'";
    $elimina=mysqli_query($mysqli,$alumno);
    header("location: index.php");
?>