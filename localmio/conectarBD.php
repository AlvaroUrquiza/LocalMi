<?php
$server ='localhost';
$bd = 'misclientes';
$usr = 'root';
$pass = '';
$conexion = mysqli_connect($server, $usr, $pass, $bd);
if(mysqli_connect_errno()){
         die ("error al conectar.bd");
}
?>