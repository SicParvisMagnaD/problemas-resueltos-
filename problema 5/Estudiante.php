<?php
require_once 'Persona.php';

class Estudiante extends Persona
{
    protected float $indiceAcademico;
    protected int $cohorte;
    protected int $estadoAcademico;   // 0 inactivo, 1 activo, 2 retirado, 3 graduado
    protected int $modalidadEstudio;  // 1 presencial, 2 virtual, 3 híbrida

    public function __construct(
        float $indiceAcademico,
        int $cohorte,
        int $estadoAcademico,
        int $modalidadEstudio,
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->indiceAcademico  = $indiceAcademico;
        $this->cohorte          = $cohorte;
        $this->estadoAcademico  = $estadoAcademico;
        $this->modalidadEstudio = $modalidadEstudio;
    }

    public function getIndiceAcademico(): float { return $this->indiceAcademico; }
    public function getCohorte(): int           { return $this->cohorte; }
    public function getEstadoAcademico(): int   { return $this->estadoAcademico; }
    public function getModalidadEstudio(): int  { return $this->modalidadEstudio; }
}