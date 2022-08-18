<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de tareas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Gestor de tareas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label for="lstPrioridad">Prioridad</label>
            </div>
            <div class="col-4">
                Usuario
            </div>
            <div class="col-4">
                Estado
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <select name="lstPrioridad" id="lstPrioridad" class="">
                    <option disabled selected>Seleccionar...</option>
                    <option value="high">Alta</option>
                    <option value="medium">Media</option>
                    <option value="high">Baja</option>
                </select>
            </div>
            <div class="col-4">
                <select name="lstUsuario" id="lstUsuario" class="">
                    <option disabled selected>Seleccionar...</option>
                    <option value="ana">Ana</option>
                    <option value="bernabe">Bernabé</option>
                    <option value="daniela">Daniela</option>
                </select>
            </div>
            <div class="col-4">
                <select name="lstEstado" id="lstEstado" class="">
                    <option disabled selected>Seleccionar...</option>
                    <option value="sin_asignar">Sin asignar</option>
                    <option value="asignado">Asignado</option>
                    <option value="en_proceso">En proceso</option>
                    <option value="terminado">Terminado</option>
                </select>
            </div>
        </div>
        <div class="row">
            
        </div>
    </main>
</body>
</html>