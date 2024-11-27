<?php
require_once('conectarBD.php');
$checkbox = $_POST['listax'];

foreach ($checkbox as $elemento){
    $consulta = "DELETE FROM `clientes` WHERE `clientes`.`ID` = $elemento"; 
    $resultado=mysqli_query($conexion, $consulta);
}
if($resultado){
    echo "Usuarios eliminados";
} else {
    echo "error, no se pudo borrar los usuarios";
}
?> <?php
header('Location: index.html');
die()
?>