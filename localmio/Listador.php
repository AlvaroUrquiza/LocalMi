<?php
require_once('conectarBD.php');
$sql = "SELECT * FROM clientes";

if ($result = mysqli_query($conexion, $sql)) {

    ?>
    <head>
        <link href="cssind.css" rel="stylesheet" type="text/css" />

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    </head>
    <body>
        <form action="borrar.php" method="post">
            <table class="striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>telefono</th>
                    <th>Monto</th>
                    <th>Ultimo cambio</th>
                    <th>Eliminar</th>
                    <th>Seleccionar</th>
                </tr>
                </thead>   
                <?php
                while ($row = $result->fetch_assoc()) {
                    $nombre = $row["Nombres"];
                    $apellido = $row["Apellidos"];
                    $telefono = $row["Telefonos"];
                    $monto = $row["Montos"];
                    $fecha = $row["UltimoCambio"];
                    $id = $row["ID"];
                ?>            
                <tr>
                    <td> <?php echo '<b>'.$id.'</b>'; ?> </td>
                    <td> <?php echo '<b>'.$nombre.'</b>'; ?> </td>
                    <td> <?php echo '<b>'.$apellido.'</b>'; ?> </td>
                    <td> <?php echo '<b>'.$telefono.'</b>'; ?> </td>
                    <td> <?php echo '<b>'.$monto.'</b>'; ?> </td>
                    <td> <?php echo '<b>'.$fecha.'</b>'; ?> </td>
                    <td> 
                        <label>
                        <input type="checkbox" name="listax[]" value="<?php echo $id ?>" />
                        <span></span>
                        </label>
                    </td> 
                    <td>
                     <?php echo '<a href="modificar.php?id='.$id.'"> MODIFICAR </a>'; ?>  
                    </td>
                </tr>
                <?php
                }
                ?>   
            </table>
            <input  class="btn red" type="submit" value="Eliminar">
        </form>
        
        <button class=" btn red"><a class="black-text" href="index.html">volver</a></button>

            <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
    <?php
$result->free();
}
?>