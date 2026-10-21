<?php
require_once 'Estudiante.php';
require_once 'Docente.php';

$miEstudiante = new Estudiante(
    3.5,     // índice académico
    2023,    // cohorte
    1,       // estado académico (1 = activo)
    1,       // modalidad de estudio (1 = presencial)
    "Juan",
    "Pérez",
    "2000-05-15"
);

echo "El nombre del estudiante es: " . $miEstudiante->getNombre() . "<br>";
echo "El apellido del estudiante es: " . $miEstudiante->getApellido() . "<br>";
echo "La fecha de nacimiento del estudiante es: " . $miEstudiante->getFechaNacimiento() . "<br>";
echo "El índice académico del estudiante es: " . $miEstudiante->getIndiceAcademico() . "<br>";
echo "El cohorte del estudiante es: " . $miEstudiante->getCohorte() . "<br>";
echo "El estado académico del estudiante es: " . $miEstudiante->getEstadoAcademico() . "<br>";
echo "La modalidad de estudio del estudiante es: " . $miEstudiante->getModalidadEstudio() . "<br>";

echo "<hr>";

$miDocente = new Docente(
    "D-0042",
    "Sistemas Computacionales",
    "Titular",
    "Magíster",
    "Tiempo Completo",
    "Ana",
    "Gómez",
    "1980-03-22"
);

echo "El docente es: " . $miDocente->getNombre() . " " . $miDocente->getApellido() . "<br>";
echo "Departamento: " . $miDocente->getDepartamento() . "<br>";
echo "Categoría: " . $miDocente->getCategoria() . "<br>";