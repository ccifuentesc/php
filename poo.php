<?php

use Persona as GlobalPersona;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Definición de las clases

class Persona{
    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;
    
    public function setDni($dni){$this->dni = $dni;}
    public function getDni($dni){return $this->dni;}
    
    public function setNombre($nombre){$this->nombre = $nombre;}
    public function getNombre($nombre){return $this->nombre;}

    public function setNacionalidad($nacionalidad){$this->nacionalidad = $nacionalidad;}
    public function getNacionalidad($nacionalidad){return $this->nacionalidad;}

    public function setEdad($edad){$this->edad = $edad;}
    public function getEdad($edad){return $this->edad;}

    public function imprimir(){

    }
}

class Alumno extends Persona{
    private $legajo;
    private $notaPortfolio;
    private $notaPhp;
    private $notaProyecto;

    public function __construct()
    {
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyecto = 0.0;
    }

    public function __destruct(){
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }

    public function __get($propiedad){
        return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
        $this->$propiedad = $valor;
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
        echo "Promedio: " . number_format($this->calcularPromedio(), 2, ",", ".") . "<br><br>";
    }

    public function calcularPromedio(){

        $promedio = 0;

        $promedio = ($this -> notaPhp + $this -> notaPortfolio + $this -> notaProyecto)/3;

        return $promedio;

    }
}

class Docente extends Persona{
    public $especialidad;

    const ESPECIALIDAD_WP = "Wordpress";
    const ESPECIALIDAD_ECO = "Economía aplicada";
    const ESPECIALIDAD_BBDD = "Base de datos";

    public function __destruct()
    {
        echo "Destruyendo el objeto " . $this->nombre . "<br>"; 
    }

    public function imprimir()
    {
        
    }

    public function imprimirEspecialidadesHabilitadas(){
        echo "Un docente puede imprimir las siguientes especialidades: <br>";
        echo "Especialidad 1: " . self::ESPECIALIDAD_BBDD . "<br>";
        echo "Especialidad 2: " . self::ESPECIALIDAD_ECO . "<br>";
        echo "Especialidad 3: " . self::ESPECIALIDAD_WP . "<br>";
    }
}

//Programa

$alumno1 = new Alumno();
$alumno1 -> setDni("33566098");
$alumno1 -> setNombre("Ana Valle");
$alumno1 -> notaPhp = 9;
$alumno1 -> notaPortfolio = 8;
$alumno1 -> notaProyecto = 8;
$alumno1 -> imprimir();

$alumno2 = new Alumno();
$alumno2 -> setDni("45987123");
$alumno2 -> setNombre("Bernabe");
$alumno2 -> notaPhp = 9;
$alumno2 -> notaPortfolio = 8;
$alumno2 -> notaProyecto = 8;
$alumno2 -> imprimir();

$docente1 = new Docente();
$docente1->setNombre("Juan Pérez");
$docente1->especialidad = Docente::ESPECIALIDAD_BBDD;
$docente1->imprimirEspecialidadesHabilitadas();

?>