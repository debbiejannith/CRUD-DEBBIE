<?php
include('connection.php');
$con = connection();

$id = null;
$name = $_POST['name'];
$age = $_POST['age'];
$empleado_cliente = $_POST['empleado_cliente'];
$sueldo_bruto = $_POST['sueldo_bruto'];
$categoria = $_POST['categoria'];
$telefono_de_contacto = $_POST['telefono_de_contacto'];
$empresa = $_POST['empresa'];




$sql = "INSERT INTO users VALUES('$id','$name','$age','$empleado_cliente', '$sueldo_bruto','$categoria','$telefono_de_contacto','$empresa')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>