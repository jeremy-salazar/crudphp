<?php
    include ("cn.php");
    //recibir parametros
    $id=$_REQUEST["id_estudiante"];
    $alumno="select * from estudiante where id_estudiante='$id'";
    $resultado=mysqli_query($mysqli,$alumno);
    while($row=mysqli_fetch_assoc($resultado))
    {  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD PHP Y MYSQL</title>
</head>
<body>
    <form method="post" action="cambiar.php">
        <p>
            <input type="hidden" value="<?php echo $row['id_estudiante'];?>" name="id">
        </p>
        <p>
            <label>Nombre</label>
            <input type="text" value="<?php echo $row['nombre'];?>"  name="nombre">
        </p>
        <p>
            <label>Apellido</label>
            <input type="text" value="<?php echo $row['apellido'];?>"  name="apellido">
        </p>
        <p>
            <label>Fecha de Nacimiento</label>
            <input type="text" value="<?php echo $row['fechanaci'];?>"  name="fecha">
        </p>
        <p>
            <label>Correo</label>
            <input type="text" value="<?php echo $row['email'];?>"  maxlength="150" name="email">
        </p>
        <input type="submit" value="Modificar" name="modificar">
        <form action="index.php">
            <input type="submit" value="Cancelar" name="cancelar">
        </form>
    </form>
    <?php
    }?>
    <br> 
</body>
</html>