<?php
namespace App;

class calculadora
{
    private $num1;
    private $num2;
    public function __construct($a1, $a2)
    {
        $this->num1 = $a1;
        $this->num2 = $a2;
    }
    public function di()
    {
        return $this->num1 / $this->num2;
    }

    public function mulstiplicar()
    {
        return $this->num1 * $this->num2;
    }
    public function resta()
    {
        return $this->num1 - $this->num2;
    }
    public function suma()
    {
        return $this->num1 + $this->num2;
    }
    
}