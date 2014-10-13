<?php
require_once "scr/calculadora.php";

class CalculadoraTest extends PHPUnit_Framework_TestCase
{
    public function testSomar()
    {
        $calculadora = new Calculadora();
        $this->assertEquals(5, $calculadora->somar(2, 3));
    }

    public function testSubtrair()
    {
        $calculadora = new Calculadora();
        $this->assertEquals(2, $calculadora->subtrair(5, 3));
    }
	
	public function testMultiplicar()
    {
        $calculadora = new Calculadora();
        $this->assertEquals(9, $calculadora->multiplicar(3, 3));
    }
	
	public function testDividir()
    {
        $calculadora = new Calculadora();
        $this->assertEquals(3, $calculadora->dividir(6, 2));
    }
}
?>
