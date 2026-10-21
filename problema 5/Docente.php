<?php
require_once 'Persona.php';

class Docente extends Persona
{
    protected string $codigoDocente;
    protected string $departamento;
    protected string $categoria;     // Titular, Adjunto, Especial, Interino
    protected string $maximoTitulo;  // Licenciado, Magíster, Doctor/PhD
    protected string $contratacion;  // Tiempo Completo, Tiempo Parcial, Por horas

    public function __construct(
        string $codigoDocente,
        string $departamento,
        string $categoria,
        string $maximoTitulo,
        string $contratacion,
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);
        $this->codigoDocente = $codigoDocente;
        $this->departamento  = $departamento;
        $this->categoria     = $categoria;
        $this->maximoTitulo  = $maximoTitulo;
        $this->contratacion  = $contratacion;
    }

    public function getCodigoDocente(): string { return $this->codigoDocente; }
    public function getDepartamento(): string  { return $this->departamento; }
    public function getCategoria(): string     { return $this->categoria; }
    public function getMaximoTitulo(): string  { return $this->maximoTitulo; }
    public function getContratacion(): string  { return $this->contratacion; }
}