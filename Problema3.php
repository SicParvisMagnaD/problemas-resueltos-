<?php
final class Coche
{
    public function getColor()
    {
        echo "Rojo";
    }
}

class CocheDeLujo extends Coche
{
    // Error fatal: la clase Coche es final y no puede heredarse.
}