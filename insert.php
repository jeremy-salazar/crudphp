<?php
    include ("cn.php");
    $nom=$_REQUEST["nombre"];
    $apell=$_REQUEST["apellido"];
    $fecha=$_REQUEST["fechanaci"];
    $email=$_REQUEST["correo"];
    $sqlstr="insert into estudiante (nombre, apellido, fechanaci, email)";
    $sqlstr.= "values('".$nom."','".$apell."','".$fecha."','".$email."')";
    $i=mysqli_query($mysqli,$sqlstr);
    header("location: index.php");
;?>

 