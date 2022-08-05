<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (isset($_SESSION["listadoClientes"])) {
    //Si existe la variable de session listadoClientes asigno su contenido a $aClientes 
    $aClientes = $_SESSION["listadoClientes"];
} else {
    $aClientes = array();
}

//Pregunta si es postback sea para enviar o eliminar todos
if ($_POST) {

    //Si hace click en Enviar entonces:

    if (isset($_POST["btnEnviar"])) {

        //Asignamos en variables los datos que vienen del formulario
        $nombre = $_POST["txtNombre"];
        $dni = $_POST["txtDni"];
        $telefono = $_POST["txtTelefono"];
        $edad = $_POST["txtEdad"];


        //Creamos un array que contendrá el listado de clientes
        $aClientes[] = array(
            "nombre" => $nombre,
            "dni" => $dni,
            "telefono" => $telefono,
            "edad" => $edad
        );

        //Actualiza el contenido de variable de session
        $_SESSION["listadoClientes"] = $aClientes;
    }


    //Si hace click en Eliminar:

    if(isset($_POST["btnEliminar"])){

    session_destroy();
    $aClientes = array(); 

    }
}
//Pregunta si viene pos en la query string
if(isset($_GET["pos"])){
    //Recupero el dato que viene desde la query string via get
    $pos = $_GET["pos"];
    //Elimina la posición del array indicada
    unset($aClientes[$pos]);
    //Actualizo la variable de session con el array actualizado
    $_SESSION["listadoClientes"] = $aClientes;
    header("Location: clientes_sesion.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de clientes</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>

    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-3">
                <h1>Listado de clientes</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <form action="" method="POST">
                    <div>
                        <label for="">Nombre:</label>
                    </div>
                    <div>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div>
                        <label for="">DNI:</label>
                    </div>
                    <div>
                        <input type="text" id="txtDni" name="txtDni" class="form-control">
                    </div>
                    <div>
                        <label for="">Teléfono:</label>
                    </div>
                    <div>
                        <input type="text" id="txtTelefono" name="txtTelefono" class="form-control">
                    </div>
                    <div>
                        <label for="">Edad:</label>
                    </div>
                    <div>
                        <input type="text" id="txtEdad" name="txtEdad" class="form-control">
                    </div>
                    <div>
                        <button type="submit" name="btnEnviar" class="btn bg-primary text white">ENVIAR</button>
                        <button type="submit" name="btnEliminar" class="btn bg-danger text white">ELIMINAR</button>
                    </div>
                </form>
            </div>
            <div class="col-8">
                <table class="table table-hover shadow border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Teléfono</th>
                            <th>Edad</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aClientes as $pos => $clientes) : ?>
                            <tr>
                                <td><?php echo $clientes["nombre"]; ?></td>
                                <td><?php echo $clientes["dni"]; ?></td>
                                <td><?php echo $clientes["telefono"]; ?></td>
                                <td><?php echo $clientes["edad"]; ?></td>
                                <td><a href="clientes_sesion.php?pos=<?php echo $pos; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

</body>

</html>