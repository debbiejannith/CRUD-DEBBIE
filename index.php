<?php
include('connection.php');
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>CRUD-DEBBIE ENGRACIA</title>
</head>

<body>
    <div class="users-form">
        <h1>Crear usuario</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="name" placeholder="Nombre">
            <input type="text" name="age" placeholder="Edad">
            <input type="text" name="empleado_cliente" placeholder="Empleado o Cliente">
            <input type="text" name="sueldo_bruto" placeholder="Sueldo bruto del Empleado">
            <input type="text" name="categoria" placeholder="Categoria del Empleado">
            <input type="text" name="telefono_de_contacto" placeholder="Telefono del cliente">
            <input type="text" name="empresa" placeholder="Nombre_Empresa">

            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Empleado o Cliente</th>
                    <th>Sueldo bruto del Empleado</th>
                    <th>Categoria del Empleado</th>
                    <th>Telefono del cliente</th>
                    <th>Nombre_Empresa</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['age'] ?></th>
                        <th><?= $row['empleado_cliente'] ?></th>
                        <th><?= $row['sueldo_bruto'] ?></th>
                        <th><?= $row['categoria'] ?></th>
                        <th><?= $row['telefono_de_contacto'] ?></th>
                        <th><?= $row['empresa'] ?></th>
                 
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>