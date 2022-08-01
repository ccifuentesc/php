<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEstudiantes = array();
$aEstudiantes[] = array("id" => 1, "nombre" => "Ana Valle", "nota" => array(7, 8));
$aEstudiantes[] = array("id" => 2, "nombre" => "Bernabe Paz", "nota" => array(5, 7));
$aEstudiantes[] = array("id" => 3, "nombre" => "Sebastian Aguirre", "nota" => array(6, 9));
$aEstudiantes[] = array("id" => 4, "nombre" => "Monica Ledesma", "nota" => array(8, 9));

function promedio($aPromedio)
{

    $suma = 0;

    foreach ($aPromedio as $promedio) {

        $suma += $promedio;
    }

    return $suma / count($aPromedio);
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <main class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Actas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <th>ID</th>
                        <th>Alumno</th>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Promedio</th>
                    </thead>
                    <tbody>
                        <?php foreach ($aEstudiantes as $estudiantes) : ?>
                            <tr>
                                <td><?php echo $estudiantes["id"]; ?></td>
                                <td><?php echo $estudiantes["nombre"]; ?></td>
                                <td><?php echo $estudiantes["nota"][0]; ?></td>
                                <td><?php echo $estudiantes["nota"][1]; ?></td>
                                <td><?php echo promedio($estudiantes["nota"]); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php  ?>
                <?php echo "Promedio del curso: " . promedio($estudiantes["nota"]); ?>
            </div>
        </div>
    </main>

</body>

</html>