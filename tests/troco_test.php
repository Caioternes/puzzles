<?php
require_once "scr/troco.php";

class TrocoTest extends PHPUnit_Framework_TestCase
{
	public function testTroco0()
    {
        $troco = new Troco(100.00, 100.00);
        $this->assertEquals("R$100,00: 0 R$50,00: 0 R$20,00: 0 R$10,00: 0 R$5,00: 0 R$2,00: 0 R$1,00: 0 R$0,50: 0 R$0,25: 0 R$0,10: 0 R$0,05: 0 R$0,01: 0", $troco->valorTroco());
    }

   	public function testTroco100()
    {
        $troco = new Troco(100.00, 200.00);
        $this->assertEquals("R$100,00: 1 R$50,00: 0 R$20,00: 0 R$10,00: 0 R$5,00: 0 R$2,00: 0 R$1,00: 0 R$0,50: 0 R$0,25: 0 R$0,10: 0 R$0,05: 0 R$0,01: 0", $troco->valorTroco());
    }
	
	public function testTroco50()
    {
        $troco = new Troco(100.00, 150.00);
        $this->assertEquals("R$100,00: 0 R$50,00: 1 R$20,00: 0 R$10,00: 0 R$5,00: 0 R$2,00: 0 R$1,00: 0 R$0,50: 0 R$0,25: 0 R$0,10: 0 R$0,05: 0 R$0,01: 0", $troco->valorTroco());
    }
	
	public function testTroco20()
    {
        $troco = new Troco(100.00, 120.00);
        $this->assertEquals("R$100,00: 0 R$50,00: 0 R$20,00: 1 R$10,00: 0 R$5,00: 0 R$2,00: 0 R$1,00: 0 R$0,50: 0 R$0,25: 0 R$0,10: 0 R$0,05: 0 R$0,01: 0", $troco->valorTroco());
    }
	
	public function testTroco10()
    {
        $troco = new Troco(100.00, 110.00);
        $this->assertEquals("R$100,00: 0 R$50,00: 0 R$20,00: 0 R$10,00: 1 R$5,00: 0 R$2,00: 0 R$1,00: 0 R$0,50: 0 R$0,25: 0 R$0,10: 0 R$0,05: 0 R$0,01: 0", $troco->valorTroco());
    }
	
	public function testTroco5()
    {
        $troco = new Troco(100.00, 105.00);
        $this->assertEquals("R$100,00: 0 R$50,00: 0 R$20,00: 0 R$10,00: 0 R$5,00: 1 R$2,00: 0 R$1,00: 0 R$0,50: 0 R$0,25: 0 R$0,10: 0 R$0,05: 0 R$0,01: 0", $troco->valorTroco());
    }
	
	public function testTroco2()
    {
        $troco = new Troco(100.00, 102.00);
        $this->assertEquals("R$100,00: 0 R$50,00: 0 R$20,00: 0 R$10,00: 0 R$5,00: 0 R$2,00: 1 R$1,00: 0 R$0,50: 0 R$0,25: 0 R$0,10: 0 R$0,05: 0 R$0,01: 0", $troco->valorTroco());
    }
	
	public function testTroco1()
    {
        $troco = new Troco(100.00, 101.00);
        $this->assertEquals("R$100,00: 0 R$50,00: 0 R$20,00: 0 R$10,00: 0 R$5,00: 0 R$2,00: 0 R$1,00: 1 R$0,50: 0 R$0,25: 0 R$0,10: 0 R$0,05: 0 R$0,01: 0", $troco->valorTroco());
    }
	
	public function testTroco050()
    {
        $troco = new Troco(100.00, 100.50);
        $this->assertEquals("R$100,00: 0 R$50,00: 0 R$20,00: 0 R$10,00: 0 R$5,00: 0 R$2,00: 0 R$1,00: 0 R$0,50: 1 R$0,25: 0 R$0,10: 0 R$0,05: 0 R$0,01: 0", $troco->valorTroco());
    }
	
	public function testTroco025()
    {
        $troco = new Troco(100.00, 100.25);
        $this->assertEquals("R$100,00: 0 R$50,00: 0 R$20,00: 0 R$10,00: 0 R$5,00: 0 R$2,00: 0 R$1,00: 0 R$0,50: 0 R$0,25: 1 R$0,10: 0 R$0,05: 0 R$0,01: 0", $troco->valorTroco());
    }
	
	public function testTroco010()
    {
        $troco = new Troco(100.00, 100.10);
        $this->assertEquals("R$100,00: 0 R$50,00: 0 R$20,00: 0 R$10,00: 0 R$5,00: 0 R$2,00: 0 R$1,00: 0 R$0,50: 0 R$0,25: 0 R$0,10: 1 R$0,05: 0 R$0,01: 0", $troco->valorTroco());
    }
	
	public function testTroco005()
    {
        $troco = new Troco(100.00, 100.05);
        $this->assertEquals("R$100,00: 0 R$50,00: 0 R$20,00: 0 R$10,00: 0 R$5,00: 0 R$2,00: 0 R$1,00: 0 R$0,50: 0 R$0,25: 0 R$0,10: 0 R$0,05: 1 R$0,01: 0", $troco->valorTroco());
    }
	
	public function testTroco001()
    {
        $troco = new Troco(100.00, 100.01);
        $this->assertEquals("R$100,00: 0 R$50,00: 0 R$20,00: 0 R$10,00: 0 R$5,00: 0 R$2,00: 0 R$1,00: 0 R$0,50: 0 R$0,25: 0 R$0,10: 0 R$0,05: 0 R$0,01: 1", $troco->valorTroco());
    }
	
	public function testTrocoQuebrado()
    {
        $troco = new Troco(1.55, 50.00);
        $this->assertEquals("R$100,00: 0 R$50,00: 0 R$20,00: 2 R$10,00: 0 R$5,00: 1 R$2,00: 1 R$1,00: 1 R$0,50: 0 R$0,25: 1 R$0,10: 2 R$0,05: 0 R$0,01: 0", $troco->valorTroco());
    }
}

?>
