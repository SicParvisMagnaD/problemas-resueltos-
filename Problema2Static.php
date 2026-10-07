<?php
// Late Static Binding con static::
class A
{
    public static function miFuncion()
    {
        // Mostrará el nombre de la clase actual::
        echo __CLASS__;
    }
    public static function otraFuncion()
    {
        static::miFuncion();
    }
} // fin de A

class B extends A
{
    public static function miFuncion()
    {
        // Mostrará el nombre de clase actual::
        echo __CLASS__;
    }
}

B::otraFuncion(); // Resultado: B