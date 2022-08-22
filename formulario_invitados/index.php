<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

//Si existe el archivo invitados lo abrimos y cargamos en una variable tipo array
//los DNI´s permitidos

if(file_exists("invitados.txt")){

    $archivo = fopen("invitados.txt", "r"); // "r" es para abrir en modo lectura
    $aDocumentos = fgetcsv($archivo, 0, ",");
}

else{//Si no, el array queda como un array vacío

    $aInvitados = array();

}

if($_POST){

    
    

    if(isset($_POST["btnVerificar"])){
        
        $documento = $_REQUEST["txtDni"];
        
        // Si el DNI ingresado se encuentra en la lista, se mostrará un mensaje de bienvenida
        if(in_array($documento, $aDocumentos)){
            $mensaje = "Bienvenido";
        }

        else{

        
        //Sino, un mensaje de "no está en la lista de invitados"
            $mensaje = "No está en la lista de invitados";
        }
   
    }

    if(isset($_POST["btnVip"])){
        
        $codigo = $_REQUEST["txtCodigo"];
        
        //Si el código es verde, entonces mostrará "Su código de acceso es: "
    
        if($codigo == "verde"){
            $mensaje = "Su código de acceso es " . rand(1000,9999);
        }

        else{
        //Si no, mostar "Usted no tiene pase VIP
            $mensaje = "Usted no tiene pase VIP";
        }

        }

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Invitados</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    
    <main class="container">
        <div class="row">
            <div class="col-12 py-3 text-center">
                <h1>Lista de invitados</h1>
            </div>
        </div>
        <?php if (isset($mensaje)): ?>
        <div class="col-12">
            <div class="alert alert-info" role="alert">
                <?php echo $mensaje; ?>
            </div>
        </div>
        <?php endif;?>
        <div class="row">
            <div class="col-6">
                <form action="" method="POST">
                    <div class="py-3">
                        Complete el siguiente formulario:
                    </div>
                    <div class="pb-3">
                        <label for="txtDni">Ingrese el DNI:</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control">
                        <button type="submit" name="btnVerificar" value="Verificar invitado" class="btn btn-primary">
                            Verificar invitado
                        </button>
                    </div>
                    <div class="pb-3">
                        <label for="txtCodigo">Ingrese el código secreto para el pase VIP:</label>
                        <input type="text" name="txtCodigo" id="txtCodigo" class="form-control">
                        <button type="submit" name="btnVip" value="Verificar codigo" class="btn btn-primary">
                            Verificar codigo
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>
</html>