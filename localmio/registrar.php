<?php
require_once('conectarBD.php');
$Nombres= $_POST['nombre'];
$Apellidos= $_POST['apellido'];
$telefonos= $_POST['tel'];
$Monto= $_POST['monto'];
$sql= "INSERT INTO clientes(Nombres,Apellidos,Telefonos,Montos) VALUES('".$Nombres."','".$Apellidos."','".$telefonos."','".$Monto."')";
mysqli_query($conexion, $sql);
header('Location: index.html');
die()
?>
