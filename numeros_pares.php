<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Muestra los numeros del 1 al 100

/*for($numero = 1; $numero <= 100; $numero++){

    echo $numero . "<br>";

}*/

//Muestra los numeros pares del 10 al 100

/*for($numero = 1; $numero <= 100; $numero++){

    if($numero %2 == 0){
        
        echo $numero . "<br>";
    
    }
}*/

//Interrumpe la ejecución del código cuando llega a 60

for($numero = 1; $numero <= 100; $numero++){

    echo $numero . " ";
    
    if($numero == 60){
        
        break;
    
    }
}


?>