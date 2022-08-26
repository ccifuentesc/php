<?php

use Persona as GlobalPersona;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Definición de las clases

class Persona{
    public $dni;
    public $nombre;
    public $edad;
    public $nacionalidad;
    public function imprimir(){

    }
}

class Alumno extends Persona{
    public $legajo;
    public $notaPortfolio;
    public $notaPhp;
    public $notaProyecto;

    public function __construct()
    {
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyecto = 0.0;
    }

    public function imprimir()
    {
        echo "DNI: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br>";
        echo "Nota Portfolio: " . $this->notaPortfolio . "<br>";
        echo "Nota PHP: " . $this->notaPhp . "<br>";
        echo "Nota Proyecto: " . $this->notaProyecto . "<br>";
    }

    public function calcularPromedio(){

    }
}

class Docente extends Persona{
    public $especialidad;

    public function imprimir()
    {
        
    }

    public function imprimirEspecialidadesHabilitadas(){
        
    }
}

//Programa

$alumno1 = new Alumno();
$alumno1 -> dni = "33566098";
$alumno1 -> nombre = "Ana Valle";
$alumno1 -> notaPhp = 9;
$alumno1 -> notaPortfolio = 8;
$alumno1 -> notaProyecto = 8;
$alumno1 -> imprimir();

$alumno2 = new Alumno();
$alumno2 -> dni = "45987123";
$alumno2 -> nombre = "Bernabe";
$alumno2 -> notaPhp = 9;
$alumno2 -> notaPortfolio = 8;
$alumno2 -> notaProyecto = 8;
$alumno2 -> imprimir();


?>