<?php

include('connection.php');
$con = connection();

$id=$_POST["id"];
$name = $_POST['name'];
$age = $_POST['age'];
$empleado_cliente = $_POST['empleado_cliente'];
$sueldo_bruto = $_POST['sueldo_bruto'];
$categoria= $_POST['categoria'];
$telefono_de_contacto = $_POST['telefono_de_contacto'];
$empresa = $_POST['empresa'];

$sql="UPDATE users SET name='$name', age='$age', empleado_cliente='$empleado_cliente', sueldo_bruto='$sueldo_bruto', categoria='$categoria', telefono_de_contacto='$telefono_de_contacto', empresa='$empresa' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>