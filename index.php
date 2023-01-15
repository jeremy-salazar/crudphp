<?php
    include ("cn.php");
    $estudiante=$mysqli->query("Select * from estudiante");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP Y MYSQL</title>
</head>
<body>
    
    <a href="registro.php"><input type="submit" value="Registrar" name="registrar"></a>
    <br>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>Email</th>
                <th colspan="2">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach($estudiante as $es)
            {
                //$datos=$mysqli->$query("Select * from estudiante where id_estudiante={$es['codigo']}");
                echo"<tr>
                    <td>{$es['id_estudiante']}</td>
                    <td>{$es['nombre']}</td>
                    <td>{$es['apellido']}</td>
                    <td>{$es['fechanaci']}</td>
                    <td>{$es['email']}</td>";
                echo "<td><a href='modifica.php?id_estudiante={$es['id_estudiante']}'>Editar</a></td>";
                echo "<td><a href='elimina.php?id_estudiante={$es['id_estudiante']}'>Borrar</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table> 
    <br> 
    <script src="./confirmar.js"></script>
</body>
</html>
