<?php
// Optellen
// Aftrekken
// delen
// vermenigvuldigen
class Calculator
{


    function Add($a,$b)
    {
        return $a + $b;
    }

    function subtract($a,  $b)
    {
        return $a - $b;
    }

    function divide($a,$b)
    {
        return $a  / $b;
    }
    function multiply ($a,$b)
    {
        return $a * $b;
    }


}

abstract class Calculator2
{
    private $calcPrivate;
    static function Add($a,$b)
    {
        return $a + $b;
    }
}

// Chaining class
class Calculator3 extends Calculator
{
    private $result;

    function Add($a,$b)
    {
        // = eigenwaarde behouden + toevoeging nieuwe waarde
        //$this -> verwijst naar het volledig object van de class
        $this->result += ($a + $b);
        return $this;
    }
    function Result()
    {
        return $this->result;
    }
}