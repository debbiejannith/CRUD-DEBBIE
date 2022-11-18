<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM users WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <input type="text" name="age" placeholder="Edad" value="<?= $row['age']?>">
                <input type="text" name="empleado_cliente" placeholder="Empleado o Cliente" value="<?= $row['empleado_cliente']?>">
                <input type="text" name="sueldo_bruto" placeholder="Sueldo bruto del Empleado" value="<?= $row['sueldo_bruto']?>">
                <input type="text" name="categoria" placeholder="Categoria del Empleado" value="<?= $row['categoria']?>">
                <input type="text" name="telefono_de_contacto" placeholder="Telefono del cliente" value="<?= $row['telefono_de_contacto']?>">
                <input type="text" name="empresa" placeholder="Nombre_Empresa" value="<?= $row['empresa']?>">


                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>