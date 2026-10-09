<?php

class Persona
{
    protected $nombre;
    protected $apellido;

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }
}

class Estudiante extends Persona
{
    protected $indice;

    public function __construct($nombre, $apellido, $indice)
    {
        parent::__construct($nombre, $apellido);
        $this->indice = $indice;
    }

    public function getIndice()
    {
        return $this->indice;
    }
}

class Docente extends Persona
{
    protected $departamento;

    public function __construct($nombre, $apellido, $departamento)
    {
        parent::__construct($nombre, $apellido);
        $this->departamento = $departamento;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }
}

// --- Ejemplo de uso ---
$estudiante = new Estudiante("Juan", "Pérez", 3.5);
echo "Estudiante: " . $estudiante->getNombre() . " " . $estudiante->getApellido();
echo " - Índice: " . $estudiante->getIndice() . "<br>";

$docente = new Docente("María", "Gómez", "Sistemas");
echo "Docente: " . $docente->getNombre() . " " . $docente->getApellido();
echo " - Departamento: " . $docente->getDepartamento() . "<br>";