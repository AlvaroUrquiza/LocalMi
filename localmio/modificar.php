<?php
require_once('conectarBD.php');
$id=$_GET["id"]; 
$sql = "SELECT * FROM clientes where id=" .$id;

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
                <?php
                while ($row = $result->fetch_assoc()) {
                    $nombre = $row["Nombres"];
                    $apellido = $row["Apellidos"];
                    $telefono = $row["Telefonos"];
                    $monto = $row["Montos"];
                    $fecha = $row["UltimoCambio"];}
                ?>            
            <form action="cargarmod.php" method="post" class="col s12">
                <div class="row card-panel">
                    <input name="id" type="hidden" id="id" value="<?php echo $id ?>" >
                    <div class="input-field col s6">
                        <input name="nombre" type="text" id="Nombre" class="validate" value="<?php echo $nombre ?>" required>
                    </div>
                    <div class="input-field col s6">
                        <input name="apellido" type="text" id="Apellido" class="validate" value="<?php echo $apellido ?>" required>
                    </div>
                    <div class="input-field col s6">
                        <input name="tel" type="number" id="Telefono" class="validate" value="<?php echo $telefono ?>" required>
                    </div>
                    <div class="input-field col s6">
                        <input name="monto" type="text" id="Monto" class="validate" value="<?php echo $monto ?>" required>
                    </div>
                    <td><button class="  btn green " type="submit">Agregar</button></td>
                    <td><button class="  btn red "><a class="black-text" href="index.html">volver</a></button></td>

                </div>
            </form>
    </body>
    <?php
$result->free();
}
?>