<?php
require_once('conectarBD.php');
$ID= $_POST['id'];
$Nombres= $_POST['nombre'];
$Apellidos= $_POST['apellido'];
$telefonos= $_POST['tel'];
$Monto= $_POST['monto'];
$sql= "UPDATE clientes SET Nombres='".$Nombres."', Apellidos='".$Apellidos."', Telefonos=".$telefonos.", Montos=".$Monto." where id=$ID";
mysqli_query($conexion, $sql);
echo"modificado con exito, regresemos al inicio";
header('Location: Listador.php');
die()
?>