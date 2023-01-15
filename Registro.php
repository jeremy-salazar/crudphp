<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP Y MYSQL</title>
</head>
<body>
    <form method="post" action="insert.php">
        <p>
            <label for="">Nombre</label>
            <input type="text" name="nombre" require="true" placeholder="Nombre">
        </p>
        <p>
            <label for="">Apellido</label>
            <input type="text" name="apellido" require="true" placeholder="Apellido">
        </p>
        <p>
            <label for="">Fecha de Nacimiento</label>
            <input type="text" name="fechanaci" require="true" placeholder="0000-00-00">
        </p>
        <p>
            <label for="">Correo</label>
            <input type="text" name="correo" require="true" maxlength="150" placeholder="Email">
        </p>
        <input type="submit" value="Guardar" name="guardar">
        <input type="reset" value="Limpiar" name="limpiar">
        <form action="index.php">
            <input type="submit" value="Cancelar" name="cancelar">
        </form>
    </form>
</body>
</html>