<?php
namespace App\Test;

use App\Calculadora;

class CalculadoraTest extends \PHPUnit\Framework\TestCase {
    public function testDividir() {
        $calc = new Calculadora(6, 10);
        $this->assertEquals(0.6, $calc->dividir());
    }

    public function testMultiplicar(){
        $calc = new Calculadora(9, 9);
        $this->assertEquals(81, $calc->mulstiplicar());
    }
    public function testResta()
    {
        $calc = new calculadora(3, 4);
        $this->assertEquals(-1, $calc->resta());
    }
    public function testSuma()
    {
        $calc = new calculadora(3, 4);
        $this->assertEquals(7, $calc->suma());
    }

}